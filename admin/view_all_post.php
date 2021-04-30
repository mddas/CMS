<?php include("Database_connection.php");?>
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
        <?php
        $sql="SELECT * from post";
        $executes=mysqli_query($connect,$sql);
        while($data=mysqli_fetch_assoc($executes)){
                $post_id=$data['post_id'];
                $who_post=$data['who_post'];
                $post_title=$data['post_title'];
                $post_category=$data['post_category'];
                $post_status=$data['post_status'];
                $post_image=$data['post_image'];
                $post_tag=$data['post_tag'];
                $post_comment="4";
                $post_date=$data['when_post'];
                ///echo $post_date;
        ?>
        
    <tr>
        <th><input type="checkbox"></th>
        <th><?php echo $post_id;?></th>
        <th><?php echo $who_post;?></th>
        <th><?php echo $post_title;?></th>
        <th><?php echo $post_category;?></th>
        <th><?php echo $post_status;?></th>
        <th><?php echo $post_image;?></th>
        <th><?php echo $post_tag;?></th>
        <th><?php echo $post_comment;?></th>
        <th><?php echo $post_date;?></th>
        <th><a href="#">view/edit/post</a</th>

</tr>
<?php } ?>

</tbody>

</table>
  