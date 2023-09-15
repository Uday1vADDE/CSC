<?php error_reporting(0); ?> 


<html>
    <head>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">-->
        <script>
      if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
      }

      </script>


        <style>body{
            background:url("career-bg.jpg")no-repeat;
            background-size:cover;
            font-family:sans-serif;
        }
        h1 {
         color:#040404;
         margin-left: 20px;
      }
    
        </style>
    </head>

    <body>  
        <h1>COLLEGE SMART CARD</h1>
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <video id="preview" width="100%"></video>
                </div>
                <form action="" method="GET">
                <div class="col-md-6">
                    <label style="color:#fff">SCAN QR CODE</label>
                    <input type="text" name="qr_idC" id="text" value="<?php if(isset($_GET['qr_idC'])){echo $_GET['qr_idC'];}?>"readonyy="" placeholder="scan QR code" class="form-control">
                    <input type="text" class="form-control" id="skills" name="ur_id" placeholder="enter your QR ID ">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary" name="submit">Search</button>
                                </div>
                            </div>
                </div>
                </form>
            </div>
        </div>

        

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">QR_ID</th>
      <th scope="col">Payment</th>
      

    </tr>
  </thead>
    <?php
        

        
    
        session_start();
  include("connection.php");
      include("function.php");
  
      if($_SERVER['REQUEST_METHOD']=="GET"){
  
          $ur_id=$_GET["ur_id"];
          $query="insert into cam (copy) values  ('$ur_id')";
         mysqli_query($con,$query);
         
  
      }



    
     $sql="select u.name,u.email,u.phone_no from users  u ,cam c where c.copy=u.phone_no";
     $result=mysqli_query($con,$sql);
     $i=0;
     if(mysqli_num_rows($result)> 0){
      while($row=mysqli_fetch_array($result)){
       
       echo"
       <tbody>
        <tr>
            <td>".++$i."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phone_no']."</td>
            <td><a href=payment.php>Make a Payment</a></td>
            
              
            </tr>";

     
      }
     } 
     else{
      echo "";
     }     

    ?>
   
  </tbody>

</table>








        <script>
        

           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('text').value=c;
           });

        </script>
    </body>
</html>
