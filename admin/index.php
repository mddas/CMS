<?php
session_start();
if(isset($_SESSION['user_name'])){
    $user_name=$_SESSION['user_name'];
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
.bar{
  font-size:15px;
  width:10%;
  margin-left:40px;
  height:450px;
  position:absolute;
  bottom:-20px;
  background:green;
  margin-top:500px; 
  float:left;
  border-style: solid;
  
}
.b2{
  margin-left:175px;
}
.b3{
  margin-left:310px;
}
.b4{
  margin-left:440px;
}
.b5{
  margin-left:570px;
}
.b6{
  margin-left:700px;
}
.b7{
  margin-left:835px;
}

#page-wrapper{
  height:1000px;
}
.totalbar{
  height:500px;
}

        </style>
<!-------.buttom{
    margin-top:200px;
    margin-right:34px;
    width:150px;
    height:45px;
    background:black;
    float:right;
    position:absolute;
    bottom: 10px;
    transition: height 2s ease-in-out  
}
.buttom:hover{
    height:180px
}

                       <div class='buttom'> </div>------->
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
                        <div class="totalbar">Bar-Graph
                        <div class="bar b1">
                           <p>Active Post</p>
                        </div>
                        <div class="bar b2">
                           <p>Draft Post</p>
                        </div>
                        <div class="bar b3">
                           <p>Catogery</p>
                        </div>
                        <div class="bar b4">
                           <p>Active user</p>
                        </div>
                        <div class="bar b5">
                           <p>Pending user</p>
                        </div>
                        <div class="bar b6">
                           <p>Active Comments</p>
                        </div>
                        <div class="bar b7">
                           <p>Pending comments</p>
                        </div>

                      </div>



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
