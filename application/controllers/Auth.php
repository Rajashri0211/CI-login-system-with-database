<?php

class Auth extends CI_Controller
{

    public function logout()
    {
      unset($_SESSION);
      session_destroy();
      redirect("login", "refresh");
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        if ($this->form_validation->run() == TRUE){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
          //check in database
          $this->db->select('*');
          $this->db->from('user');
          $this->db->where(array('username' => $username, 'password' => $password));
          $query=$this->db->get();

          $user = $query->row();
          //ifuser exists
          if ($user->email){
            //temporary message
            $this->session->set_flashdata("success", "You are Logged in");

            //set session variables
            $_SESSION['user_logged'] = TRUE;
            $_SESSION['username'] = $user->username;

            //redirect profile page
            redirect("profile", "refresh");

          } else {
            $this->session->set_flashdata("error", "No such account exists in database");
            redirect("login", "refresh");
          }
        }

        $this->load->view('login');
    }
    public function register()
    {
        if (isset($_POST['register'])){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]');

            //if form validation TRUE
            if ($this->form_validation->run() == TRUE){
              echo 'Form Validated';

            //add user in database
            $data = array(
              'username' => $_POST['username'],
              'email' => $_POST['email'],
              'password' => md5($_POST['password']),
              'gender' => $_POST['gender'],
              'created_date' => date("Y-m-d H:i:s"),
              'phone' => $_POST['phone']
            );
            $this->db->insert('user', $data);

            $this->session->set_flashdata("success", "Your account has been Registered. You can login now");
            redirect("register", "refresh");

            }
        }


        $this->load->view('register');
    }

}


?>
