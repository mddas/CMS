<?php include("header.html"); ?>
<?php include("Database_connection.php");?>
<?php 
if(!$connect){
	die("connection failed".mysqli_connect_error());
          }
    else{
        $sql="SELECT * from post";
        $executes=mysqli_query($connect,$sql);
    }
    ?>
<body>
    <div id="wrapper">
    <?php include("Dashboard.html");?>
    

    <div id="page-wrapper">
<div class="container-fluid">

<!----Switch case get methode include---->
<?php 
if(isset($_GET['Action'])){
$action=$_GET['Action'];
}
else{
    $action="none";
}
switch ($action) {
    case 'Add':
            include("add_post.php");
            break;
    
    default:
            include("view_all_post.php");
            break;
}


?>
  

<!----Switch case get methode include---->




</div><!---close page-wrapper---->
</div><!---closed container-fluid--->
</div><!-----closed wrapper--->

 <!-- jQuery -->
 <script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>