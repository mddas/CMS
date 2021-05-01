<?php include("Database_connection.php");?>
<?php 
$result = mysqli_query($connect,"SHOW TABLE STATUS WHERE `Name` = 'UserDetail'");
$data = mysqli_fetch_assoc($result);
$user_id = $data['Auto_increment'];

session_start();
if(isset($_POST['users_submit'])){
 
//image upload

if(isset($_FILES['user_image'])){
   $errors= array();
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
 
 ///


    
    $user_name=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_lastname=$_POST['user_lastname'];
    $user_role=$_POST['user_role'];
    $user_password=$_POST['user_password'];
    $user_randsalt=$_POST['user_randsalt'];

    $user_image=$target_loc;
    $sql="INSERT INTO `UserDetail`(`userid`, `user_email`, `user_name`, `user_last_name`, `user_password`, `user_image`, `user_role`, `randsalt`) VALUES ('$user_id','$user_email','$user_name','$user_lastname','$user_password','$user_image','$user_role','$user_randsalt');";
    $executes=mysqli_query($connect,$sql);
    if(!$executes){
      echo "Error: " . $sql . "<br>" . $connect->error;
    }
    else{
      echo "inserted sucessfully....";
    }
}



?>
<form method="post" enctype="multipart/form-data">
<select name="user_role" style="width:265px;height:40px;">
<option value="admin">Admin</option>
<option value="subscriber">Subscriber</option>

<input type="text" placeholder="Email Address" name="user_email"  class="form-control" style="width:50%;height:40px;margin-top:10px">
<input type="text" placeholder="user name" name="user_name"  class="form-control" style="width:50%;height:40px;margin-top:10px">
<input type="text" placeholder="last name" name="user_lastname"  class="form-control" style="width:50%;height:40px;margin-top:10px">
<input type="text" placeholder="user password" name="user_password"  class="form-control" style="width:50%;height:40px;margin-top:10px">
<input type="file" name="user_image">


</select>
<input type="text" placeholder="randsalt" name="user_randsalt"  class="form-control" style="width:50%;height:40px;margin-top:10px">
 
  <button type="submit" class="btn btn-primary" name="users_submit">Submit</button>
</form>