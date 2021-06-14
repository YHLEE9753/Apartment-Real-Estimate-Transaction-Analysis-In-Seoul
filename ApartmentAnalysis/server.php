<?php
   include("config.php");
   //주택담보대출금리 2014~2021
   $house_rate=array(2014=>3.55,2015=>3.03,2016=>2.91,2017=>3.27,2018=>3.39,2019=>2.74,2020=>2.51,2021=>2.73);
   $sql = "SELECT avg(price)/avg(width) as avg_price_per_width, gu_name FROM seoul WHERE year>=2017 GROUP BY gu_name ORDER BY avg(price)/avg(width) DESC";
   //$sql = "SELECT year, avg(price) as avg_price, avg(width) as avg_width, avg(price)/avg(width) as avg_price_per_width FROM seoul GROUP BY year ORDER BY avg(price)/avg(width) DESC";
   
   $result1 = mysqli_query($db,$sql);
   $gu_name_arr=array();
   $avg_price_per_width_arr=array();
   if (mysqli_num_rows($result1) > 0) {
      while($row = mysqli_fetch_assoc($result1)) {
         $gu_name_arr[]=$row['gu_name'];
         $avg_price_per_width_arr[]=$row['avg_price_per_width'];
      }
   }else{
      echo "테이블에 데이터가 없습니다.";
   }
   
   
   $mygu=$_POST['mygu'];

   $sql2 = "SELECT year, max(price) as max_price, min(price) as min_price, avg(price) as avg_price, count(id) as cnt FROM seoul WHERE gu_name='".$mygu."' GROUP BY year";
   $result2 = mysqli_query($db,$sql2);
   $table2=array();
   if (mysqli_num_rows($result2) > 0) {
      while($row = mysqli_fetch_assoc($result2)) {
         $table2[]=array($row['year'], $row['max_price'], $row['min_price'], $row['avg_price'], $row['cnt']);
      }
   }else{
      echo "테이블에 데이터가 없습니다.";
   }


   $sql3 = "SELECT avg(price)/avg(width) as avg_price_per_width FROM seoul WHERE 2015<year and year<2021 and gu_name='".$mygu."' GROUP BY year ORDER BY year";
   $result3 = mysqli_query($db,$sql3);
   $graph1=array();
   if (mysqli_num_rows($result3) > 0) {
      while($row = mysqli_fetch_assoc($result3)) {
         $graph1[]=$row['avg_price_per_width'];
      }
   }else{
      echo "테이블에 데이터가 없습니다.";
   }
   $graph2=array();
   $r=array(0,50000,100000,200000,300000,1000000);
   for($i=0; $i<5; $i++){
      $low=$r[$i];
      $high=$r[$i+1];
      $sql4 = "SELECT count(id) as cnt FROM seoul WHERE gu_name='".$mygu."' and price>='".$low."' and price<'".$high."'";
      $result4 = mysqli_query($db,$sql4);
      if(mysqli_num_rows($result4) == 0) echo "테이블에 데이터가 없습니다.";
      $graph2[]=mysqli_fetch_assoc($result4)['cnt'];
   }

   $graph3=array(($graph1[1]/$graph1[0]-1)*100, ($graph1[2]/$graph1[1]-1)*100, ($graph1[3]/$graph1[2]-1)*100, ($graph1[4]/$graph1[3]-1)*100);
?>
