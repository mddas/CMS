<?php include ('header.html');?>
<body>
<?php include ('navbar.php');?>
    <!-- Page Content -->
    <div class="container" style="font-family: 'Sofia';">

        <div class="row">
        
           
            <div class="col-md-8">
    
     <!-- Blog Entries Column -->
                <h3 class="page-header">
                    Question and solution
                    <small>Recent solution</small>
                </h3>

                <!-- First Blog Post -->
                <?php
        if(isset($_GET['Action']) && isset($_GET['post_id']))
        {
            $action=$_GET['Action'];
            $post_id=$_GET['post_id'];
    
    
        }
        else{
            $action="none";
            $more="false";
        }

            switch ($action) {
                case 'view':
                    $sql="SELECT * from post WHERE post_id=$post_id";
                    $more="true";
                    break;
                
                default:
                    $sql="SELECT * from post";
                    # code...
                    break;
            }
        
        //$sql="SELECT * from post";
        $executes=mysqli_query($connect,$sql);
        while($data=mysqli_fetch_assoc($executes)){
                $who_post=$data['who_post'];
                $post_id=$data['post_id'];
                $post_title=$data['post_title'];
                $post_content=$data['post_content'];
                $post_category=$data['post_category'];
                $post_image=$data['post_image'];
                $post_tag=$data['post_tag'];
                $post_date=$data['when_post'];
                ///echo $post_date;
        ?>
                <div class="card text-white bg-dark mb-3"
                    style="max-width: 100%;color:rgba(255, 255, 255, 0.719); background-color:black; text-decoration-color: blanchedalmond;margin-top:30px">

                    <div class="card-header">
                        <center>
                            <h3 style="margin-top:5px;"><?php echo $post_title; ?></h3>
                            <hr>
                        </center>
                    </div>

                    <div class="card-body">    
                        <img class="img-responsive" src="<?php echo "admin/".$post_image; ?>" style="width:80%;height:300px;margin-left:75px" alt="">
                    <center><h4><?php echo $post_content; ?></h4></center>
                        
                        
                       <?php if($more=="false"){?> <a class="btn btn-primary" href="index.php?Action=view&post_id=<?php echo $post_id; ?>">Read More <span
                                class="glyphicon glyphicon-chevron-right"></span></a><?php } ?>
                                by <h7><?php echo $who_post; ?></h7>
                                <p style="float:right;margin-right:10px;"><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>

                        
                    </div>

                </div>
                <?php } ?>

            <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

             <?php if($more=="true"){?>
            <!-------this is comments----->
            <!-- Blog Comments -->
    
                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->


                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>---->
                <?php } ?>
            <!-----end comment---------->



            </div>


            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>
                <div class="well">
                    <h4>User Login</h4>
                    <div class="input-group">
                        <form method="POST" action="login.php">
                            <input type="email" placeholder="Email or number" name="user_email" class="form-control">
                            <input type="password" placeholder="Enter strong Password" name="user_pass"
                                class="form-control" style="margin-top:10px">
                            <button type="submit" class="btn btn-primary"
                                style="margin-left:100px;margin-top: 10px ;">Login</button>
                        </form>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Category</h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <h6>Framework</h6>
                            <ul class="list-unstyled">

                                <li><a href="#">Laravel</a>
                                </li>
                                <li><a href="#">Django</a>
                                </li>
                                <li><a href="#">DotNEt</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <h6>Back-End</h6>
                            <ul class="list-unstyled">
                                <li><a href="#">PHP</a>
                                </li>
                                <li><a href="#">Python</a>
                                </li>
                                <li><a href="#">c-sharp</a>
                                </li>

                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci
                        accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>