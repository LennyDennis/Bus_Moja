<?php
    if(isset($_POST['submit'])){
      include_once ('../db/database.php');
      $search = $_POST['search'];
      $query = "SELECT * FROM `bus` WHERE `busname` LIKE '%".$search."%' and origin='".$_POST["origin"]."' and destination='".$_POST["destination"]."' and departure_date='".$_POST["date"]."'";
      $search_result = searchTable($query);

    }else{
        $query="SELECT * FROM `bus` where origin='".$_POST["origin"]."' and destination='".$_POST["destination"]."' and departure_date='".$_POST["date"]."' " ;
        $search_result = searchTable($query);
    }
	function searchTable($query){
        include_once ('../db/database.php');
        $results=mysqli_query($conn, $query);
        return $results;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/search.css" rel="stylesheet" type="text/css">
    <title>Buses Available</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="main">
      <div class="navbar">
          <div class="navhead">
            <img class="img" src="./images/logo2.png" alt="logo">
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
        <form method="POST" action="item.php" autocomplete="off">
            <h2>Products</h2>
                <div class="search">
                    <input type="text" name="search"class="find" placeholder="Search product...">
                    <button type="submit" name="submit" class="searchbutton" ><i class="fa fa-search"></i></button>
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
                      <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                while($row=mysqli_fetch_assoc($search_result))
                                {
                            ?>
                                    <td><?php echo $row['bus_id'] ?></td>
                                    <td><?php echo $row['busname'] ?></td>
                                    <td><?php echo $row['destination'] ?> </td>
                                    <td><?php echo $row['origin'] ?></td>
                                    <td><?php echo $row['departure_time'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['fare'] ?></td>
                                    <td>Action</td>                        </tr>
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
