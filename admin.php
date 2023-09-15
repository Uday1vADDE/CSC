<?php
session_start();
include("connection.php");
include("function.php");


if($_SERVER['REQUEST_METHOD']=="POST"){

 

  
  $email=$_POST['email'];
  $password=$_POST['password'];
  

  if(!empty($email) && !empty($password) && !is_numeric($email)){
      
      
      $query="select * from admins where email='$email' limit 1";
       $result=mysqli_query($con,$query);
       if($result){

        if($result && mysqli_num_rows($result)>0)
        {
          $user_data=mysqli_fetch_assoc($result);
          if($user_data['password']===$password){
            
            $_SESSION['user_id']=$user_data['user_id'];
            header("Location: studentde.php");
            die;

          }

     }
       }
       
        echo "Enter correct email or password";
      
       
  }
  }


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style> 
  body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
  }
  body{
        background-image:url('loginbg.jpg');
        background-size: cover;
    }


    form{
      opacity:0.9;
        background-color:#FCFAFA;
        margin-top:3em;
        margin_left:30em;
        margin-right:38em;
        padding:30px;
        box-shadow: 2px 2px 2px 8px #888888;
        
    }
    </style>
  <title>Document</title>
</head>
<body>









  <div class="container">
  <form method="POST" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Admin Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> Admin Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="Login">Submit</button>
  <p style="text-align: center;">New User?<br>Are you student<br><a href="register.php">Sign Up</a></p>
  
</form>
  </div>
  
  
 
  
  </body>
</html>
