<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="script1.js"></script>
    <script src="script2.js"></script>

    <title>Apartment Real Estimate Transaction Analysis In Seoul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
    <!--부트스트랩-->
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="s.css"> -->
    <!-- <style>
        #first {
            display: block;
            overflow: auto;
        }
    </style> -->
</head>




<body>
    <?php include("server.php"); ?>
  <!--네비게이션-->
  <nav class="sticky_nav"> 
    <ul class="blog_menu" style="background-color: slategray; border-radius: 30px; margin-bottom: 20px;"> 
      <li><a href="main.php" style="color: aliceblue;"><strong>Home</strong></a></li>  
  </ul> 
</nav>

<div style="height:40px; width:100%;float:left;"></div>
  
  

  <!--시작-->
  <div style = "float:left; display:flex; flex-direction:row;">
    <div style="width:450px; height:330px; overflow:auto;">
    <table id="first" class = "table" style="margin-left: 50px; width: 380px; float:left;">
      <tr >
        <p><th colspan="2" style="text-align: center;">2015-2021 Seoul Apartment Sales price ranking</th></p>
      </tr>
      <tr align="center"><!-- 첫번째 줄 시작 -->
        <td>index</td>
        <td>area (10,000won/m<sup>2</sup>)</td>
      </tr><!-- 첫번째 줄 끝 -->
      <tr>
        <td align="center">1</td>
        <td align="center"><?php echo $gu_name_arr[0]."(".round($avg_price_per_width_arr[0]).")"?></td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td align="center"><?php echo $gu_name_arr[1]."(".round($avg_price_per_width_arr[1]).")"?></td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td align="center"><?php echo $gu_name_arr[2]."(".round($avg_price_per_width_arr[2]).")"?></td>
      </tr>
      <tr>
        <td align="center">4</td>
        <td align="center"><?php echo $gu_name_arr[3]."(".round($avg_price_per_width_arr[3]).")"?></td>
      </tr>
      <tr>
        <td align="center">5</td>
        <td align="center"><?php echo $gu_name_arr[4]."(".round($avg_price_per_width_arr[4]).")"?></td>
      </tr>
      <tr>
        <td align="center">6</td>
        <td align="center"><?php echo $gu_name_arr[5]."(".round($avg_price_per_width_arr[5]).")"?></td>
      </tr>
      <tr>
        <td align="center">7</td>
        <td align="center"><?php echo $gu_name_arr[6]."(".round($avg_price_per_width_arr[6]).")"?></td>
      </tr>
      <tr>
        <td align="center">8</td>
        <td align="center"><?php echo $gu_name_arr[7]."(".round($avg_price_per_width_arr[7]).")"?></td>
      </tr>
      <tr>
        <td align="center">9</td>
        <td align="center"><?php echo $gu_name_arr[8]."(".round($avg_price_per_width_arr[8]).")"?></td>
      </tr>
      <tr>
        <td align="center">10</td>
        <td align="center"><?php echo $gu_name_arr[9]."(".round($avg_price_per_width_arr[9]).")"?></td>
      </tr>
      <tr>
        <td align="center">11</td>
        <td align="center"><?php echo $gu_name_arr[10]."(".round($avg_price_per_width_arr[10]).")"?></td>
      </tr>
      <tr>
        <td align="center">12</td>
        <td align="center"><?php echo $gu_name_arr[11]."(".round($avg_price_per_width_arr[11]).")"?></td>
      </tr>
      <tr>
        <td align="center">13</td>
        <td align="center"><?php echo $gu_name_arr[12]."(".round($avg_price_per_width_arr[12]).")"?></td>
      </tr>
      <tr>
        <td align="center">14</td>
        <td align="center"><?php echo $gu_name_arr[13]."(".round($avg_price_per_width_arr[13]).")"?></td>
      </tr>
      <tr>
        <td align="center">15</td>
        <td align="center"><?php echo $gu_name_arr[14]."(".round($avg_price_per_width_arr[14]).")"?></td>
      </tr>
      <tr>
        <td align="center">16</td>
        <td align="center"><?php echo $gu_name_arr[15]."(".round($avg_price_per_width_arr[15]).")"?></td>
      </tr>
      <tr>
        <td align="center">17</td>
        <td align="center"><?php echo $gu_name_arr[16]."(".round($avg_price_per_width_arr[16]).")"?></td>
      </tr>
      <tr>
        <td align="center">18</td>
        <td align="center"><?php echo $gu_name_arr[17]."(".round($avg_price_per_width_arr[17]).")"?></td>
      </tr>
      <tr>
        <td align="center">19</td>
        <td align="center"><?php echo $gu_name_arr[18]."(".round($avg_price_per_width_arr[18]).")"?></td>
      </tr>
      <tr>
        <td align="center">20</td>
        <td align="center"><?php echo $gu_name_arr[19]."(".round($avg_price_per_width_arr[19]).")"?></td>
      </tr>
      <tr>
        <td align="center">21</td>
        <td align="center"><?php echo $gu_name_arr[20]."(".round($avg_price_per_width_arr[20]).")"?></td>
      </tr>
      <tr>
        <td align="center">22</td>
        <td align="center"><?php echo $gu_name_arr[21]."(".round($avg_price_per_width_arr[21]).")"?></td>
      </tr>
      <tr>
        <td align="center">23</td>
        <td align="center"><?php echo $gu_name_arr[22]."(".round($avg_price_per_width_arr[22]).")"?></td>
      </tr>
      <tr>
        <td align="center">24</td>
        <td align="center"><?php echo $gu_name_arr[23]."(".round($avg_price_per_width_arr[23]).")"?></td>
      </tr>
      <tr>
        <td align="center">25</td>
        <td align="center"><?php echo $gu_name_arr[24]."(".round($avg_price_per_width_arr[24]).")"?></td>
      </tr>
      </table>
      </div>
      <table class = "table" style="margin-left: 50px; margin-right: 50px; width: 380px; float:left;">
      <th colspan="5" style="text-align: center;">Statistics (<?php echo $_POST['mygu']?>)</th>
      <tr><!-- 첫번째 줄 시작 -->
          <td align="center">year</td>
          <td align="center">max_price (10,000won)</td>
          <td align="center">min_price (10,000won)</td>
          <td align="center">avg_price (10,000won)</td>
          <td align="center"># of transactions</td>
      </tr><!-- 첫번째 줄 끝 -->
      <tr>
        <td align="center"><?php echo $table2[0][0]?></td>
        <td align="center"><?php echo $table2[0][1]?></td>
        <td align="center"><?php echo $table2[0][2]?></td>
        <td align="center"><?php echo round($table2[0][3])?></td>
        <td align="center"><?php echo $table2[0][4]?></td>
      </tr>
      <tr>
        <td align="center"><?php echo $table2[1][0]?></td>
        <td align="center"><?php echo $table2[1][1]?></td>
        <td align="center"><?php echo $table2[1][2]?></td>
        <td align="center"><?php echo round($table2[1][3])?></td>
        <td align="center"><?php echo $table2[1][4]?></td>
      </tr>
      <tr>
        <td align="center"><?php echo $table2[2][0]?></td>
        <td align="center"><?php echo $table2[2][1]?></td>
        <td align="center"><?php echo $table2[2][2]?></td>
        <td align="center"><?php echo round($table2[2][3])?></td>
        <td align="center"><?php echo $table2[2][4]?></td>
      </tr>
      <tr>
        <td align="center"><?php echo $table2[3][0]?></td>
        <td align="center"><?php echo $table2[3][1]?></td>
        <td align="center"><?php echo $table2[3][2]?></td>
        <td align="center"><?php echo round($table2[3][3])?></td>
        <td align="center"><?php echo $table2[3][4]?></td>
      </tr>
      <tr>
        <td align="center"><?php echo $table2[4][0]?></td>
        <td align="center"><?php echo $table2[4][1]?></td>
        <td align="center"><?php echo $table2[4][2]?></td>
        <td align="center"><?php echo round($table2[4][3])?></td>
        <td align="center"><?php echo $table2[4][4]?></td>
      </tr>
      <tr>
        <td align="center"><?php echo $table2[5][0]?></td>
        <td align="center"><?php echo $table2[5][1]?></td>
        <td align="center"><?php echo $table2[5][2]?></td>
        <td align="center"><?php echo round($table2[5][3])?></td>
        <td align="center"><?php echo $table2[5][4]?></td>
      </tr>
      </table>

      <!--지도 추가-->
      

      <div class="map-responsive" style="float:left;">
        <iframe name="map" src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202407.59916466533!2d126.83400075508148!3d37.564045504353274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2012d5c39cf%3A0x7e11eca1405bf29b!2z7ISc7Jq47Yq567OE7Iuc!5e0!3m2!1sko!2skr!4v1623413980581!5m2!1sko!2skr"
        width="400" height="300" style="border:1px #acacac solid;" allowfullscreen="" loading="lazy"></iframe>
      </div>

  </div>



  <div style="height:80px; width:100%;float:left;"></div>

  <!-- 그래프 부분 -->

  
  <!-- //////////// -->
  <div style = "float:left;">
    <!--1.막대그래프-->
    <script>
    var y2016 = Number('<?php echo $graph1[0];?>');
    var y2017 = Number('<?php echo $graph1[1];?>');
    var y2018 = Number('<?php echo $graph1[2];?>');
    var y2019 = Number('<?php echo $graph1[3];?>');
    var y2020 = Number('<?php echo $graph1[4];?>');

    google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Element", "Density", { role: "style" } ],
            ["2016", y2016, "#b87333"],
            ["2017", y2017, "silver"],
            ["2018", y2018, "gold"],
            ["2019", y2019, "color: #e5e4e2"],
            ["2020", y2020, "color: green"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" },
                        2]);

        var options = {
            title: "Average price (10,000won/m2)",
            width: 500,
            height: 400,
            bar: {groupWidth: "80%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
         }
    </script>
         
    <div id="columnchart_values" style="width: 440px; height: 500px; float:left; padding-left: 10px;"></div>

    
    <!--2.막대그 래프-->
    <script>
    var p1 = Number('<?php echo $graph2[0];?>');
    var p2 = Number('<?php echo $graph2[1];?>');
    var p3 = Number('<?php echo $graph2[2];?>');
    var p4 = Number('<?php echo $graph2[3];?>');
    var p5 = Number('<?php echo $graph2[4];?>');

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Price', 'Transcations'],
          ['0~5억',  p1],
          ['5~10억',  p2],
          ['10~20억',  p3],
          ['20~30억', p4],
          ['30~억',  p5]
        ]);

        var options = {
          title: 'Percentage of transactions by price',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <div id="donutchart" style="width: 400px; height: 500px; float:left; padding-left: 10px;"></div>
    <!--3.선그래프-->
    <script>
      var s1 = Number('<?php echo $graph3[0];?>');
      var s2 = Number('<?php echo $graph3[1];?>');
      var s3 = Number('<?php echo $graph3[2];?>');
      var s4 = Number('<?php echo $graph3[3];?>');

      var r1 = Number('<?php echo $house_rate[2017];?>');
      var r2 = Number('<?php echo $house_rate[2018];?>');
      var r3 = Number('<?php echo $house_rate[2019];?>');
      var r4 = Number('<?php echo $house_rate[2020];?>');

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'rising rate', 'mortgage interest rate'],
          ['2017',  s1,      r1],
          ['2018',  s2,      r2],
          ['2019',  s3,      r3],
          ['2020',  s4,      r4]
        ]);

        var options = {
          title: 'Price Rising Rate & Mortgage Interest Rate',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
 
    </script>
    <div id="curve_chart" style="width: 600px; height: 400px; float:left; padding-left: 40px;"></div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
  <script src="js/bootstrap.min.js"></script>
</body>
<div style="float: left; width: 100%;">
  <footer>
    <p><Strong>Database Practice Web Programming 6Team</Strong></p>
    <p><a href="https://www.data.go.kr/data/15057511/openapi.do"><Strong>Data Source1 : Apartment contract dataset</Strong></a></p>
  </footer>
</div>

</html>