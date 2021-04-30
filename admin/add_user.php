<?php include("Database_connection.php");?>
<?php 
$result = mysqli_query($connect,"SHOW TABLE STATUS WHERE `Name` = 'post'");
$data = mysqli_fetch_assoc($result);
$post_id = $data['Auto_increment'];

session_start();
if(isset($_POST['post_submit'])){
 
//image upload

if(isset($_FILES['image'])){
   $errors= array();
   $file_name = $_FILES['image']['name'];
   $file_size =$_FILES['image']['size'];
   $file_tmp =$_FILES['image']['tmp_name'];
   $file_type=$_FILES['image']['type'];
   //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
   $file_ext=explode('.',$file_name);
   $file_ext=end($file_ext);
   $file_ext=strtolower($file_ext);
   $target_loc="image/".$post_id.".".$file_ext;
   
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


    
    $post_title=$_POST['post_title'];
    $post_category=$_POST['post_category'];
    $post_tag=$_POST['post_tag'];
    $post_content=$_POST['post_content'];
    $post_status=$_POST['post_status'];
    $who_post=$_SESSION['user_name'];
    $post_image=$target_loc;
    $sql="INSERT INTO `post`(`post_id`,`post_category`, `post_title`, `post_content`,`post_status`, `post_tag`, `who_post`, `post_image`) VALUES ('$post_id','$post_category','$post_title','$post_content','$post_status','$post_tag','$who_post','$post_image');";
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

<select name="post_category" style="width:265px;height:40px;">
<option value="random">category</option>
<option value="laravel">laravel</option>
<option value="python">python</option>
<option value="Django">Django</option>
<option value="c-sharp">c-sharp</option>
<option value="dotnet">Dotnet</option>
<option value="javascript">javascript</option>
<option value="c++">c++</option>
</select>

<select name="post_status" style="width:265px;height:40px;">
<option value="publish">publish</option>
<option value="draft">Draft</option>
</select>
<input type="text" placeholder="what you want to say?" name="post_title"  class="form-control" style="width:50%;height:40px;margin-top:10px">
 <input type="text" placeholder="Tags" name="post_tag" class="form-control" style="width:50%;height:40px;margin-top:10px">
 ​<textarea id="txtArea" rows="7" name="post_content" cols="40" style="margin-top:10px;width:50%;" placeholder="Enter content"></textarea>
 <input type="file" name="image">
  <button type="submit" class="btn btn-primary" name="post_submit">Submit</button>
</form>