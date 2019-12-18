<!DOCTYPE html>
<html>
<head>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../css/index.css" rel="stylesheet" type="text/css">
  <link href="../css/form.css" rel="stylesheet" type="text/css">
  <title>Bus Moja</title>
</head>
<body>
  <div class="container-fluid">
    <div class="welcome">
    <!-- <?php include_once("../main/navbar.php") ?> -->

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
      </div> -->
      <div class="content">
        <h1>Bus Moja</h1>
        <p>Welcome to  Bus Moja online booking site></p>
        <div class="booking">
            <div class="form_left">
                <img src="../images/logo2.png" alt="form">
            </div>
            <div class="form_right">
                <h2>Book</h2>
                <form class="busform" name="busform" id="busform" action="../main/searchbus.php" method="POST" autocomplete="off">
                    <div class="departure">
                        <select name="origin" id="origin" class="input" required>
                            <option value="" hidden disabled selected value>Departing from....</option>
                            <option value="">Nairobi</option>
                            <option value="">Kisumu</option>
                            <option value="">Eldoret</option>
                            <option value="">Mombasa</option>
                        </select>
                    </div>
                    <div class="destination">
                        <select name="destination" id="destination" class="input" required>
                            <option value="" hidden disabled selected value>Going to....</option>
                            <option value="">Nairobi</option>
                            <option value="">Kisumu</option>
                            <option value="">Eldoret</option>
                            <option value="">Mombasa</option>
                        </select>
                    </div>
                    <div class="date">
                        <input name="departure_date" class="input" type="date" id="date" >
                    </div>
                    <input type="submit" name="submit" value="Book" class="button" id="bookbus">
                </form>
            </div>
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="row slides">
        <div class="col-md-6 about">
          <img src="../images/bg3.jpeg" alt="bus">
        </div>
        <div class="col-md-6 text-center side">
          <h1 id="myabout">About Us</h1>
          <h2>We Bus Moja</h2>
          <p>
            Bus Moja is an online platform that allows booking of bus tickets.
            We enable travelers to reserve seats and make payments in a convenient and timely way. 
            Try Bus Moja today!!
          </p>
        </div>
      </div>
      <div class="footer" id="mycontact">
        <div class="fcontent">
          <div class="fsection about">

            <h2>Bus Moja</h2>
            <p>
              Bus Moja is an online platform that allows booking of bus tickets.
              We enable travelers to reserve seats and make payments in a convenient and timely way. 
            </p>
          </div>
          <div class="fsection links">
            <h2>Quick Links</h2>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Book a bus</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="fsection email">
            <h2>Email Us</h2>
            <form>
              <input type="email" class="femail" name="email" placeholder="Your email address">
              <textarea name="message" class="fmessage" placeholder="Your message....."></textarea>
              <button type="submit" class="fbutton">
                <i class="fa fa-envelope"></i>
                Send</button>
            </form>
          </div>
        </div>
        <div class="footer-bottom">
          &copy; Bus Moja 2019 
        </div>
      </div>
    </div>
  </div>
</body>
</html>