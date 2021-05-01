<?php
session_start();
if(isset($_SESSION['user_role'])){
    $user_role=$_SESSION['user_role'];
     
    $user_name=$_SESSION['user_name'];
    if($user_role!="admin" && $user_role!="superadmin")
    {
      echo $user_role;
      header("Location:/CMS?$user_role"); 
    }
   }
   else{
       header("Location:/CMS/login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .notification{
            float:left;
            
            width:24%;
            height:200px;
            background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
        }
        .notification img{
            width:150px;
            height:150px;
        }
        .breadcrumb{
            top:10px;
        }


.notification:hover {
  background: red;
}
 .notification .badge {
  position: absolute;
  top: 40px;
  right: 80px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>
</head>

<body>

    <div id="wrapper">
<?php include("Dashboard_navbar.html");?>
       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row"  style="font-family: 'Sofia';font-size: 22px;">
                    <div class="col-lg-12">
                      <center>
                        <h3>
                            Welcome to Admin Panel
                            <small>Subheading</small>
                        </h3>
</center>
                   
  <div class="Menus">
    <div class="notification">
     <p>post</p>
        <span class="badge">5</span>
      <img src="images/post.png">
    </div>
    <div class="notification">
      <p>post</p>
        <span class="badge">4</span>
      <img src="images/comment.jpg">
    </div>
    <div class="notification">
      <p>New User</p>
        <span class="badge">9</span>
      <img src="images/newuser.jpg">
    </div>
    <div class="notification">
      <p>Catogery</p>
        <span class="badge">2</span>
      <img src="images/catogery.jpeg">
    </div>
  </div>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                        <!------Bar graph start---->
                   <?php include("bargraph.php");?>
                      <!---Bar graph End------>  
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
