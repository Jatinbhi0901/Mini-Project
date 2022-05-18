<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>


    <section class="loginpage">
      <div class="box1">
        
        <img
          src="./images/logo.jpeg"
          alt="image"
          width="180px"
          height="180px"
        />
        <h1>Welcome Back!</h1>
        <p>Please login to your account</p>
        <form action="" method="post">
          <input type="email" name="email" placeholder="Enter email" class="text" />
          <br />
          <input type="password" name="password" placeholder="Enter password" class="text" />
          <br />
          <a href="">Forget Password</a>
          <br />
          
          
        
 
          <button class="btn2" onclick="navigate()">create account</button>
          
          <button class="btn1" type="submit" name="value">Login</button>
         
        </form>
        
      </div>
      <?php
        if(isset($_POST['value'])){
          $email = $_POST['email'];
          $password = $_POST['password'];
          
          $sql = "select * from register where email='$email'";
          $res = mysqli_query($conn,$sql) or die(mysqli_error());
          
          if($res==TRUE){
            $query = mysqli_fetch_array($res);
            if($query['email']==$email && password_verify($password,$query['password'])){
              echo '<script>
                      alert("Login successfull !");
                      window.history.go(-2);
                    </script>';
            }
            else{
              echo '<script>
                      alert("Wrong email or password. Try again !");
                      window.history.go(-1);
                    </script>';
            }
          }
          else{
            echo '<script>
            alert("Login failed");
          </script>';
          }
        }
        
      ?>

      <div class="box2">
        <img
          src="./images/WhatsApp Image 2022-05-15 at 3.04.39 PM.jpeg"
          alt="image"
          width="460px"
          height="494px"
        />
      </div>
    </section>
  </body>
</html>
