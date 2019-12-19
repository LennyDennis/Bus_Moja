<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/index.css" rel="stylesheet" type="text/css" />
    <link href="../css/passform.css" rel="stylesheet" type="text/css" />
    <!-- <link href="./css/busSeats.css" rel="stylesheet" type="text/css" /> -->
    <title>Passenger Details</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="main">
          <div class="maincontent">
        <?php include_once('./navbar.php');?>
 
          <div class="passenger">
            <div class="form_left">
            </div>
            <div class="form_right">
                <h2>Passenger details</h2>
                <form class="busform" name="busform" id="busform" action="../main/searchbus.php" method="POST" autocomplete="off">
                <ul class="list">
                  <li>
                    <label for="name"></label>
                    <input type="text" class="input" name="name" placeholder="Your names" />
                  </li>
                  <li><div class = "errormessage" id = "catnameerror"></div></li>
                  <li>
                    <label for="mobile"></label>
                    <input type="tel" class="input" name="mobile" placeholder="Your mobile number" />
                  </li>
                  <li><div class = "errormessage" id = "catnameerror"></div></li>
                  <li>
                    <label for="id"></label>
                    <input type="number" class="input" name="id" placeholder="Your Id number" />
                  </li>
                  <li><div class = "errormessage" id = "catnameerror"></div></li>
                  <li>
                    <label for="email"></label>
                    <input type="email" class="input" name="email" placeholder="Your email" />
                  </li>
                  <li><div class = "errormessage" id = "catnameerror"></div></li>
                  <li>
                    <label for="seat"></label>
                    <input type="number" class="input" name="seat" placeholder="Select Seat" />
                  </li>
                  <li><div class = "errormessage" id = "catnameerror"></div></li>
                  <li>
                        <input type="submit" id="button" name="submit" value="Submit">
                  </li>
              </ul>
                </form>
            </div>
        </div>
</div>
          <?php include_once('./footer.php');?>
        </div>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../main/busSeats.js"></script>
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/scripts.js"></script>
</html>
