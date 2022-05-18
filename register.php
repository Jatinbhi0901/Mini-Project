<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>
    <div class="register">
      <h2>CREATE YOUR OWN ACCOUNT</h2>
      <h4>Enter your account details</h4>
      <div class="line-3">
        <hr />
      </div>
    <form action="" method="post">
      <h4 class="left">Enter your Name</h4>
      <input type="text" name="name" class="abc" required/>
      <br />
      <h4 class="left">Enter your E-mail address</h4>
      <input type="email" name="email" class="abc" required />
      <br />
      <h4 class="left">Enter your Password</h4>
      <input type="password" name="password" class="abc" required/>
      
      <br />
      <br />
      <input type="submit" name="submit" value="Back" class="b1" >
      <input type="submit" name="value" value="Register" class="b2" >
      
      </form>
    </div>
    <?php
      if(isset($_POST['value'])){
        
        //get data from form

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password =$_POST['password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        //insert into database
        $sql = "insert into register set name='$name', email = '$email', password= '$hash_password'";
      

        $res = mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==TRUE){
            echo '<script>
                  alert("Registered Successfully");
                  window.history.go(-2);
                  </script>';

        }
        else{
          echo '<script>
                  alert("Registeration failed");
                  window.history.go(-1);
                </script>';
        }
      }
      if(isset($_POST['submit'])){
        header("location: login.php");
      }
    ?>
  </body>
</html>


