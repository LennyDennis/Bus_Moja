<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Buses Available</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/index.css" rel="stylesheet" type="text/css">
        <link href="../css/search.css" rel="stylesheet" type="text/css">
	</head>
    <body>
			<div class="container-fluid">

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<br>
						<h3>Welcome to BookMyBusTicket</h3>
					</header>

			</section>

				</div>

<?php
include_once ('../db/database.php');
$req=$_POST["seats"];
$bus_id;
$sel="SELECT * FROM `bus` where origin='".$_POST["origin"]."' and destination='".$_POST["destination"]."' and date='".$_POST["date"]."' and seats>= ".$_POST["seats"]."  " ;
$str= mysql_query($sel) or die(mysql_error());
$rows= mysql_num_rows($str) ;
if($rows==0)
{
	echo '<h3 style= "text-align:center;"> <font color="red">No available Buses </font></h3>';
	echo "<br>";
}
else
{

	echo '<h3 style= "text-align:center;"> <font color="red"><center>Available Buses </center></font></h3>';
echo '<table class="table">
<tr>
<th scope="col">No</th>
<th scope="col">Bus</th>
<th scope="col">Destination</th>
<th scope="col">Departure</th>
<th scope="col">Time</th>
<th scope="col">Date</th>
<th scope="col">Price</th>
<th scope="col">Book</th>
</tr>';
while($row=mysql_fetch_array($str))
{
	$bus_id = $row['id'];
	$total_fare= $row['fare'] * $req;
	//echo $Bus_id;
	echo "<tr>";

	echo "<td>".$row['bus_id']."</td>";
	echo "<td>".$row['busname']."</td>";
	echo "<td>".$row['destination']."</td>";
	echo "<td>".$row['origin']."</td>";
	echo "<td>".$row['departure_time']."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".$row['fare']."</td>";
	echo "<td>";
	echo '<a href="payment1.php?seats_no='.$req.'& bus_id='.$bus_id.'& total_fare='.$total_fare.'">Book Now</a>';
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
}
?>
</div>
		
	</body>
</html>
