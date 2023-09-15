<?php
session_start();
include("connection.php");
include("function.php");


if($_SERVER['REQUEST_METHOD']=="POST"){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone_no=$_POST['phone_no'];
  $password=$_POST['password'];
  $confpassword=$_POST['confpassword'];
  

  if(!empty($email) && !empty($password) && !is_numeric($email) && $password==$confpassword){
      
      $user_id=random_num(20);
      $query="insert into users (user_id,name,email,password,phone_no) values ('$user_id','$name','$email','$password','mrec@$phone_no')";
       mysqli_query($con,$query);

       header("Location: index.php");
       die;
  }else{

    echo"please enter some valid information ";
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
    body{
        background-image:url('loginbg.jpg');
        background-size: cover;
    }

    form{
      opacity:0.8;
        background-color:#fff;
        margin-top:3em;
        margin_left:30em;
        margin-right:38em;
        padding:30px;
        box-shadow: 2px 2px 2px 8px #888888;
        
    }
    </style>
    <title>register</title>
</head>
<body>
    <div class="container">

    
    <form method="POST">
    <div class="mb-3" >
     <label for="exampleInputName" class="form-label">Full Name</label>
     <input type="Name" class="form-control" id="exampleInputName" name="name" >
     </div>
      
     <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
     </div>


     

     <div class="mb-3" >
     <label for="exampleInputName" class="form-label">Roll Number</label>
     <input type="text" class="form-control" id="exampleInputNumber" name="phone_no" >
     </div>
  
  

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" name="confpassword">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
  <p style="text-align: center;">already registered?<br><a href="index.php">Login</a></p>
  
</form>
  </div>

  
    
</body>
</html>