
<!----table grid---->

<table class="table table-bordered">

    <thead>
        <tr>
            <th><input type="checkbox"></th>
            <th>Id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>image</th>
            <th>Post</th>
            <th>Access</th>
            <th>Action</th>
          
</tr>
</thead>

<tbody>
<?php
        $sql="SELECT * from UserDetail";
        $executes=mysqli_query($connect,$sql);
        while($data=mysqli_fetch_assoc($executes)){
                $user_id=$data['userid'];
                $user_name=$data['user_name'];
                $user_lastname=$data['user_last_name'];
                $user_email=$data['user_email'];
                $user_image=$data['user_image'];
                $user_numofpost=5;
                $isapproved="Need aproved";
                ///echo $post_date;
        ?>
        
    <tr>
        <th><input type="checkbox"></th>
        <th><?php echo $user_id;?></th>
        <th><?php echo $user_name;?></th>
        <th><?php echo $user_lastname;?></th>
        <th><?php echo $user_email;?></th>
        <th><image src="<?php echo $user_image;?>" style="height:80px;width:80px;"></th>
        <th><?php echo $user_numofpost;?></th>
        <th><?php echo $isapproved;?></th>
        <th><a href="#">view/edit/post</a</th>
        <th><a hred="#">Approve</a></th>
        <th><a href="#">Denny</a></th>

</tr>
<?php } ?>

</tbody>

</table>
  