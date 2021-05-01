<?php include("Database_connection.php");?>
<?php
session_start();
$user_role="subscriber";
if(isset($_SESSION['user_name'])){
    $user_name=$_SESSION['user_name'];
    $user_role=$_SESSION['user_role'];
   }
   

?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="font-family: 'Sofia';font-size: 21px;">
    <div class="container">
        <a class="navbar-brand" href="/CMS">
            <img src="images/cms.jpeg" alt="" width="50" height="35">
        </a>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

           
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <?php
                 if($connect){
                     //echo "Sucessfully to connect database...";
                 }
                 else{
                     echo "Failed to connect to database...";
                 }
                 $query="SELECT * FROM catogery";
                 $execute=mysqli_query($connect,$query);
                 while($data=mysqli_fetch_assoc($execute)){;
                 //echo $data['catogery_name']."<p></p>";
                 ?>
                <li>
                    <a href="#"><?php echo $data['category_name'] ; ?></a>
                </li>
               <?php } ?>
                <?php if($user_role=="admin" || $user_role=="superadmin"){?>
                <li>
                    <a href="/CMS/admin"><?php echo $user_role;?></a>
                </li>
                <?php } ?>
                <li>
                    <a href="Registration.php">Registration</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php if(isset($_SESSION['user_name'])){
echo $user_name; } else{echo "Robbot";} ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
