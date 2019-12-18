<?php
    if(isset($_POST['submit'])){ 
      include_once ('../db/database.php');

      $origin=$_POST["origin"];
      $destination=$_POST["destination"];
      $date=$_POST["departure_date"];

      // $query="SELECT * FROM `bus` WHERE origin='$origin' and destination='$destination' and date='$date' " ;
      $query = "SELECT * FROM `bus` ";
      $results=mysqli_query($conn, $query);
      $search_result = $results;

    }else{
      header('Location: ./index.php?Booking=error');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <link href="../css/search.css" rel="stylesheet" type="text/css">
    <title>Buses Available</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="main">
      <div class="navbar">
          <div class="navhead">
            <img class="img" src="../images/logo2.png" alt="logo">
          </div>
          <div class="navbody">
            <ul>
              <li><a class="a" href="#">Home</a></li>
              <li><a class="a" href="#">About Us</a></li>
              <li><a class="a" href="#">Book</a></li>
              <li><a class="a" href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="bus option"> 
        <form method="POST" action="searchbus.php" autocomplete="off">
                <div class="search">
                    <input type="text" name="search"class="find" placeholder="Search bus...">
                    <button type="" name="" class="searchbutton" ><i class="fa fa-search"></i></button>
                </div>
                <div class="bustable">
                <table class="table">
                    <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Bus</th>
                      <th scope="col">Destination</th>
                      <th scope="col">Departure</th>
                      <th scope="col">Time</th>
                      <th scope="col">Date</th>
                      <th scope="col">Price</th>
                      <th scope="col">Book</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                while($row=mysqli_fetch_assoc( $search_result))
                                {
                            ?>
                                    <td><?php echo $row['bus_id'] ?></td>
                                    <td><?php echo $row['bus_name'] ?></td>
                                    <td><?php echo $row['destination'] ?> </td>
                                    <td><?php echo $row['origin'] ?></td>
                                    <td><?php echo $row['departure_time'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['fare'] ?></td>
                                    <td><a href="pass_details.php?Seats_no='.$req.'& Bus_id='.$Bus_id.'& Total_fare='.$Total_fare.'">Book Now</a></td>                        </tr>
                            <?php
                                    }
                            ?>
                    </tbody>
                </table>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/scripts.js"></script>
</html>
