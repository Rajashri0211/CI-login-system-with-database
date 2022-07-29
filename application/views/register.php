<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/boostrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<style>
    body{
      background-image: url("<?php echo base_url();?>assets/image1.jpg");
      background-color: #cccccc;
      height: 500px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    #myVideo {
      position: fixed;
      left:875px;
      top:15px;
      min-width: 12%;
      min-height: 15%;
      z-index: -5;
      border-radius: 10px;
    }

    #main{
      margin-top:40px;
      z-index: 1;
      color: #fff;
    }
    #main h1, p{
      text-align: center;
    }
    form{
      padding-left: 30px;
      padding-right: 50px;
      line-height: 0.8cm;
    }
    input[type="text"],[type="password"]
    {
      border: 1px solid #fff;
      opacity: 0.5;
    }
    #gender{
      border: 1px solid #fff;
      opacity: 0.5;
    }
    .btn{
        width:150px;
        border: 1px solid #fff;
        background-color: #fff;
        opacity: 0.3;
        color: #000!important;
        font-weight: 500;
    }
</style>
  </head>
  <body>
    <video autoplay muted loop id="myVideo">
  <source src="<?php echo base_url();?>assets/video.mp4" type="video/mp4">
</video>

    <div id="main" class="col-lg-4 offset-7">
      <h1>Register Now</h1>
      <p>Fill in the details to register on our website!!</p>
      <!-- <?php if (isset($_SESSION['success'])){?>
        <div class="alert alert-success">
          <?php echo $_SESSION['success'];?>
        </div>
      <?php }?>
      <?php echo validation_errors('<div class="alert alert-danger">','</div>');?> -->
      <form class="" action="" method="POST">
          <div class="form-group">
              <label for="username">Username :</label>
              <input type="text" name="username" id="username" class="form-control" required>
          </div>
          <div class="form-group">
              <label for="email">Email :</label>
              <input type="text" name="email" id="email" class="form-control" required>
          </div>
          <div class="form-group">
              <label for="password">Password :</label>
              <input type="password" name="password" id="password" class="form-control" required>
          </div>
          <div class="form-group">
              <label for="password">Confirm Password :</label>
              <input type="password" name="password2" id="password" class="form-control" required>
          </div>
          <div class="form-group">
              <label for="gender">Gender :</label>
              <select class="form-control" name="gender" id="gender" required>
                <option value="Select">Choose...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
          </div>
          <div class="form-group">
              <label for="phone">Phone :</label>
              <input type="text" name="phone" id="phone" class="form-control" required>
          </div><br>
          <div class="text-center">
            <button class="btn" name="register">Register</button>
          </div><br>
          <div class="text-center">
            <p>Already Registered? <a href="login">Login</a></p>
          </div>
      </form>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/boostrap.min.js"> -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    </script>
  </body>
</html>
