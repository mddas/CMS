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

<!----table grid---->

<table class="table table-bordered">

    <thead>
        <tr>
            <th><input type="checkbox"></th>
            <th>Post Id</th>
            <th>Author</th>
            <th>Title</th>
            <th>category</th>
            <th>Status</th>
            <th>Image</th>
            <th>Tags</th>
            <th>Comments</th>
            <th>Date</th>
            <th>Action</th>
</tr>
</thead>

<tbody>
        <!---- 
        while($data=mysqli_fetch_assoc($executes)){
                $post_id=$data['post_id'];
                $post_category=$data['post_category'];
                $who_post=$data['who_post'];
                $when_post=$data['when_post'];
                $post_title=$data['post_title'];
                $post_image=$data['post_image'];
        }--->
        
    <tr>
        <th><input type="checkbox"></th>
        <th>4</th>
        <th>Manoj</th>
        <th>what is Module</th>
        <th>python</th>
        <th>pending</th>
        <th>image</th>
        <th>Django</th>
        <th>module is return type function</th>
        <th>2078/1/1</th>
        <th><a href="#">view/edit/post</a</th>

</tr>
<tr>
        <th><input type="checkbox"></th>
        <th>4</th>
        <th>Manoj</th>
        <th>what is Module</th>
        <th>python</th>
        <th>pending</th>
        <th>image</th>
        <th>Django</th>
        <th>module is return type function</th>
        <th>2078/1/1</th>
        <th><a href="#">view/edit/post</a</th>

</tr>
<tr>
        <th><input type="checkbox"></th>
        <th>4</th>
        <th>Manoj</th>
        <th>what is Module</th>
        <th>python</th>
        <th>pending</th>
        <th>image</th>
        <th>Django</th>
        <th>module is return type function</th>
        <th>2078/1/1</th>
        <th><a href="#">view/edit/post</a</th>

</tr>
<tr>
        <th><input type="checkbox"></th>
        <th>4</th>
        <th>Manoj</th>
        <th>what is Module</th>
        <th>python</th>
        <th>pending</th>
        <th>image</th>
        <th>Django</th>
        <th>module is return type function</th>
        <th>2078/1/1</th>
        <th><a href="#">view/edit/post</a</th>

</tr>
<tr>
        <th><input type="checkbox"></th>
        <th>4</th>
        <th>Manoj</th>
        <th>what is Module</th>
        <th>python</th>
        <th>pending</th>
        <th>image</th>
        <th>Django</th>
        <th>module is return type function</th>
        <th>2078/1/1</th>
        <th><a href="#">view/edit/post</a</th>

</tr>
<tr>
        <th><input type="checkbox"></th>
        <th>4</th>
        <th>Manoj</th>
        <th>what is Module</th>
        <th>python</th>
        <th>pending</th>
        <th>image</th>
        <th>Django</th>
        <th>module is return type function</th>
        <th>2078/1/1</th>
        <th><a href="#">view/edit/post</a</th>

</tr>
</tbody>

</table>
  

<!-----closed table grid ---->




</div><!---close page-wrapper---->
</div><!---closed container-fluid--->
</div><!-----closed wrapper--->

 <!-- jQuery -->
 <script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>