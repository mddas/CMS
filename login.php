<?php include ('Database_connection.php');?>
<?php
if($connect){
    //echo "2::connected sucessfully...\n";
}
else{
    echo "not connect to database..";
}
if(isset($_POST['user_email']))
{
$user_email=$_POST["user_email"];
$user_password=$_POST["user_pass"];


$query="SELECT * FROM UserDetail WHERE user_email='$user_email'";
$result_pass=mysqli_query($connect,$query);
$data=mysqli_fetch_assoc($result_pass);
if(isset($data))
{
    $str_pass=$data['user_password'];
    if($user_password==$str_pass)
    {
        $user_name=$data['user_name'];
        $user_email=$data['user_email'];
        session_start();
        $_SESSION['user_name']=$user_name;
        $_SESSION['user_email']=$user_email;
        echo "congratulation you are loged in...";
        header("Location:/CMS");
    }
    else{
       echo "password not match..";
    
}
}
else{
    echo "Email not match...";
}
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
 <div class="well">
                    <h4>User Login</h4>
                    <div class="input-group">
                        <form method="POST" action="login.php">
                            <input type="email" placeholder="Email or number" name="user_email" class="form-control">
                            <input type="password" placeholder="Enter strong Password" name="user_pass"
                                class="form-control" style="margin-top:10px">
                            <button type="submit" class="btn btn-primary"
                                style="margin-left:100px;margin-top: 10px ;">Login</button>
                        </form>
                    </div>
                    <!-- /.input-group -->
                </div>
            </div>
<div class="col-md-4">
     <!-- One of three columns--->
    </div>
  </div>
</div>

</body>
</html>
