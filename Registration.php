
<?php include ('Database_connection.php');?>
<?php
  
    if(isset($_POST['user_name']))
    {
        echo "inserted to database";
  

if($connect){
    echo "1::you are connected to database sucessfully..";
}
else{
    echo "1::sorry failed to connected to database..";
}

$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];
    
if(!$connect)
{
	die("connection failed".mysqli_connect_error());
}
$insert="INSERT INTO `UserDetail`(`user_Email`, `user_name`, `user_password`) VALUES ('$user_email','$user_name','$user_password');";
$insert_signup=mysqli_query($connect,$insert);
if(!$insert_signup){
  echo "Error: " . $insert. "<br>" . $connect->error;
}

header('Location: ' . '/CMS/login.php'); 
}

?>

<?php include('header.html');?>
<body>
    <?php include('navbar.php')?>

    <div class="container">
  <div class="row">
    <div class="col-md-4">
     <!---- One of three columns--->
    </div>
    <div class="col-md-4">
    <form method="POST">
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label"></label>
    <input type="text" placeholder="Enter your Name" name="user_name" class="form-control">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label"></label>
    <input type="email" class="form-control" placeholder="Enter your Email" name="user_email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label"></label>
    <input type="password" class="form-control" placeholder="Strong Password" name="user_password" id="exampleInputPassword1">
  </div>
 
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-md-4">
     <!-- One of three columns--->
    </div>
  </div>
</div>

</body>
</html>





   