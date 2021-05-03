<?php include("Database_connection.php");?>
<table class="table table-bordered">

    <thead>
        <tr>
            <th><input type="checkbox"></th>
            <th>comment_id</th>
            <th>comments</th>
            <th>post_id</th>
            <th>when comment</th>
            <th>who comment</th>
            <th>Status</th>
           
</tr>
</thead>

<tbody>
        <?php
        $sql="SELECT * from Comments";
        $executes=mysqli_query($connect,$sql);
        while($data=mysqli_fetch_assoc($executes)){
                $comment_id=$data['comment_id'];
                $comments=$data['comments'];
                $post_id=$data['post_id'];
                $when_comment=$data['when_comment'];
                $who_comment=$data['who_comment'];
                $comment_status=$data['comment_status'];
                ///echo $post_date;
        ?>
        
    <tr>
        <th><input type="checkbox"></th>
        <th><?php echo $comment_id;?></th>
        <th><?php echo $comments;?></th>
        <th><?php echo $post_id;?></th>
        <th><?php echo $when_comment;?></th>
        <th><?php echo $who_comment;?></th>
        <th><?php echo $comment_status;?></th>
        
        <th><a href="#">view/edit/post</a</th>

</tr>
<?php } ?>

</tbody>

</table>
  