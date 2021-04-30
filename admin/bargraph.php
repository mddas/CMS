
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data','count'],
          
          <?php 
          $active_post=5;
          $draft_post=7;
          $comments=10;
          $pending_post=2;
          $users=7;
          $categories=8;
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


