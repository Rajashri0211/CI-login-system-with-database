<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/boostrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> -->
  <style>
      body{
        background-image: url("<?php echo base_url();?>assets/img1.jpg");
        background-color: #cccccc;
        height: 500px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .fa-solid{
        color:#dc4a57;
        font-size:25px;
      }
      h4{
        color:#dc4a57;
        font-size:30px;
        font-weight: bolder;
        text-transform: capitalize;
      }
  </style>
  </head>
  <body>

    <div class="container mt-5">
      <h3>Profile Page</h3><br>

      <!-- <?php if (isset($_SESSION['success'])){?>
        <div class="alert alert-success">
          <?php echo $_SESSION['success'];?>
        </div>
      <?php }?> -->
      <div class="row">
        <div class="col-6">
            <h4>Hello!!, <?php echo $_SESSION['username'];?></h4>
        </div>

        <div class="col-1 offset-5">
              <a href="<?php echo base_url()?>index.php/Auth/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
      </div>

    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/boostrap.min.js"> -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    </script>
  </body>
</html>
