<?php include("Database_connection.php");?>
<?php
session_start();
if(isset($_SESSION['user_name'])){
    $user_name=$_SESSION['user_name'];
   }
   else{
       header("Location:/CMS/login.php");
   }
if(isset($_POST['category_name'])){
    $category_name=$_POST["category_name"];
    if(!$connect){
	die("connection failed".mysqli_connect_error());
          }
    else{
        $sql="INSERT INTO `catogery`(`category_name`) VALUES ('$category_name');";
        $executes=mysqli_query($connect,$sql);
        echo "inserted into database is successfully..";
    }
}

?>
<?php include("header.html");?>

<body>

    <div id="wrapper">
<?php include("Dashboard.html");?>
       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row"  style="font-family: 'Sofia';font-size: 16px;">
                    <div class="col-lg-12">
                        <!----Add catogery---->
                        <h3>Add catogery</h3>

                        <div class="container">
  <div class="row">
   
    <div class="col-md-4">
 <div class="well">
                    <h4>Add Catogery</h4>
                    <div class="input-group">
                        <form method="POST">
                            <input type="text" placeholder="Enter Catogery name" name="category_name" class="form-control">
                        
                            <button type="submit" class="btn btn-primary"
                                style="margin-left:100px;margin-top: 10px ;">Add Catogery</button>
                        </form>
                    </div>
                    <!-- /.input-group -->
                </div>
            </div>
            <div class="col-md-2">
        <!----this is  one of this column ---->
</div>
    <div class="col-md-4">
     <table class="table">
         <thead>
             <tr>
                 <th>id</th>
                 <th>Title</th>
                 <th>Action</th>
</tr>
</thead>
<tbody>
    <?php
    $sql="SELECT * FROM catogery";
    $executes=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($executes)){
        $category_id=$data['category_id'];
        $category_name=$data['category_name'];
    
    ?>
    <tr>
        <th><?php echo $category_id;?></th>
        <th><?php echo $category_name;?></th>
        <th><a href="#">edit/delete</a><th>
</tr>
<?php } ?>
<tr>
    <th>2</th>
    <th>Laravel</th>
    <th><a href="#">edit/delete</a><th>
</tr>
<tr>
    <th>3</th>
    <th>python</th>
    <th><a href="#">edit/delete</a><th>
</tr>
<tr>
    <th>4</th>
    <th>Django</th>
    <th><a href="#">edit/delete</a></th>
</tr>
</tbody>
</table>
    </div>
   
  </div>
</div>

                        <!----closed CAtogery---->
                      <center>
                        <h3>
                            Welcome to Admin Panel
                            <small>Subheading</small>
                        </h3>
</center>
            

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                        
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
