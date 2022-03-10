<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="static/css/checkordercss.css">
	<title>Vendor Page</title>
</head>
<body>
<header class="header">
	<h2 class="vendorheader">CHECKORDERS</h2>
</header>

<?php 
      include_once "common/nav.php";
      // if(isset($_SESSION["id"])){
      //       header("Location:http://localhost/project/views/vendor/login.php");
      // }
 ?>

<table border="1">

<?php 
      include_once $_SERVER['DOCUMENT_ROOT']."/project/controller/vendor/checkorder.php";
      $heading = init();
      echo "<tr>";
      foreach($heading as $value){
            echo "<th>$value</th>";
      }
      echo "</tr>";

      $car = displayCar();
      $bike = displayBike();
      $i=0;
      if(!empty($car)){
            $n = mysqli_num_rows($car);
            while($n--){
                  $row = mysqli_fetch_array($car);
                        echo '<tr>
                              <td>'.++$i.'</td>
                              <td>'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>
                              <td>'.$row['vehicle_no'].'</td>
                              <td>'.$row['name'].'</td>
                              <td>'.$row['date_of_order'].'</td>
                              <td>'.$row['dor'].'</td>
                              <td>'.$row['price'].'</td>
                        </tr>';
            }
      }
      if(!empty($bike)){
            $n = mysqli_num_rows($bike);
            while($n--){
                  $row = mysqli_fetch_array($bike);
                        echo '<tr>
                        <td>'.++$i.'</td>
                        <td>'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>
                        <td>'.$row['vehicle_no'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['date_of_order'].'</td>
                        <td>'.$row['dor'].'</td>
                        <td>'.$row['price'].'</td>
                        </tr>';
            }
      }

?>
</body>
</html>    

