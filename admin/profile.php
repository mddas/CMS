<?php include("header.html"); ?>
<?php include("Database_connection.php");?>
<?php 
session_start();
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

<!------profile start here---->
<?php include("Database_connection.php");?>
<?php 

//////user image

if(isset($_FILES['user_image'])){
    $errors= array();
    $user_id=$_SESSION['user_id'];
    $file_name = $_FILES['user_image']['name'];
    $file_size =$_FILES['user_image']['size'];
    $file_tmp =$_FILES['user_image']['tmp_name'];
    $file_type=$_FILES['user_image']['type'];
    //$file_ext=strtolower(end(explode('.',$_FILES['user_image']['name'])));
    $file_ext=explode('.',$file_name);
    $file_ext=end($file_ext);
    $file_ext=strtolower($file_ext);
    $target_loc="usersimage/".$user_id.".".$file_ext;
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,$target_loc);      
    }else{
       print_r($errors);
    }
  }

///image upload 




if(isset($_POST['users_submit'])){
 
//image upload


 ///


    
    $user_name=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_lastname=$_POST['user_lastname'];
    $user_role=$_POST['user_role'];
    $user_password=$_POST['user_password'];
    $user_randsalt=$_POST['user_randsalt'];
    $user_id=$_SESSION['user_id'];
    //$user_image=$target_loc;
    $sql="UPDATE `UserDetail` SET `user_email`='$user_email',`user_name`='$user_name',`user_last_name`='$user_lastname',`user_password`='$user_password',`user_role`='$user_role' WHERE userid=$user_id;";
    $executes=mysqli_query($connect,$sql);
    if(!$executes){
      echo "Error: " . $sql . "<br>" . $connect->error;
    }
    else{
      echo "updated sucessfully....";
    }
}



?>
<?php
        $user_id=$_SESSION['user_id'];
        $sql="SELECT * from UserDetail WHERE userid='$user_id'";
        $executes=mysqli_query($connect,$sql);
        $data=mysqli_fetch_assoc($executes);
        $user_id=$data['userid'];
        $user_name=$data['user_name'];
        $user_lastname=$data['user_last_name'];
        $user_email=$data['user_email'];
        $user_image=$data['user_image'];
        $user_password=$data['user_password'];
        $user_image=$data['user_image'];
        $user_numofpost=5;
        $isapproved="Need aproved";
                ///echo $post_date;
        ?>

<form method="post" enctype="multipart/form-data">
<input type="file" name="user_image"><img src="<?php echo $user_image;?>" style="height:200px;width:200px;">
<br><br>
<select name="user_role" value="<?php echo $user_role;?>" style="width:265px;height:40px;">
<option value="admin">Admin</option>
<option value="subscriber">Subscriber</option>
</select>

<input type="text" placeholder="Email Address" name="user_email" value="<?php echo $user_email;?>" class="form-control" style="width:50%;height:40px;margin-top:10px">
<input type="text" placeholder="user name" name="user_name" value="<?php echo $user_name;?>"  class="form-control" style="width:50%;height:40px;margin-top:10px">
<input type="text" placeholder="last name" name="user_lastname" value="<?php echo $user_lastname;?>"  class="form-control" style="width:50%;height:40px;margin-top:10px">
<input type="text" placeholder="user password" name="user_password" value="<?php echo $user_password;?>" class="form-control" style="width:50%;height:40px;margin-top:10px">


</select>
<input type="text" placeholder="randsalt" name="user_randsalt"  class="form-control" style="width:50%;height:40px;margin-top:10px">

  <button type="submit" class="btn btn-primary" name="users_submit">Submit</button>
</form>

<!------profile end here-------->




</div><!---close page-wrapper---->
</div><!---closed container-fluid--->
</div><!-----closed wrapper--->

 <!-- jQuery -->
 <script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>