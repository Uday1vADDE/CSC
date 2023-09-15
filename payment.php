
<?php error_reporting(0); ?> 
<?php
session_start();
include("connection.php");
include("function.php");


if($_SERVER['REQUEST_METHOD']=="POST"){

  
  
  
  

  
      
      
      

       header("Location: popinfo.php");
       die;
 

  
  }


?>







<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  </head>
  <style>
    body{
        background-image:url('paymentbg.jpg');
        background-size: cover;
    }
  </style>
  <body>
    <div class="container">

    



      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>AMOUNT PAYMENT</h1>
          </div>
          <div class="panel-body">
            <form  method="POST">
             <!-- <div class="form-group">
                <label for="fisrtName">Full Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="fullname"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Gender</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="gender"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="Roll Number">Roll Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="roll_no"
                  name="roll_no"
                />
              </div>
              <div class="form-group">
                <label for="email">email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />-->
              </div>
              <div class="form-group">
                <label for="number">Enter amount</label>
                <input type="text"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <!--<input type="submit" name="submit" class="btn btn-primary" />-->
              <button type="submit" class="btn btn-primary" name="submit" >Submit</button> 
            </form>
          </div>
        </div>
      </div>




    </div>

  </body>
</html>