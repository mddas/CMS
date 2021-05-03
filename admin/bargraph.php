<?php include("Database_connection.php");?>
<?php echo "Uday Tech";

$post_sql="select * from post;";
$post_executes=mysqli_query($connect,$post_sql);
$post_count = mysqli_num_rows($post_executes);

$comment_sql="select * from Comments;";
$comments_executes=mysqli_query($connect,$comment_sql);
$comments_count = mysqli_num_rows($comments_executes);

$users_sql="select * from UserDetail;";
$users_executes=mysqli_query($connect,$users_sql);
$users_count = mysqli_num_rows($users_executes);

$catogery_sql="select * from catogery;";
$catogery_executes=mysqli_query($connect,$catogery_sql);
$catogery_count = mysqli_num_rows($catogery_executes);

?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data','count'],
          
          <?php 
          $active_post=$post_count;
          $draft_post=0;
          $comments=$comments_count;
          $pending_post=0;
          $users=$users_count;
          $categories=$catogery_count;
$element_text=['Active Posts','draft_post','Comments','pending_post','users',"categoties"];
$element_count=[$active_post,$draft_post,$comments,$pending_post,$users,$categories];
for($i=0;$i<6;$i++){
  echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
}
          ?>


          ['Posts',9],
          
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

  
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>


