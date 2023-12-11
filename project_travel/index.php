<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>WanderLuxe Tours - Home</title>
</head>
<body>
   

  <form method="post">
  <table border="0">
      <tr>
        <td style="width:2500px; text-align:left;"><img src="assets/image/package/logo.jpg" alt="logo" width="50px" height="50px"></td>
        <td style="width:1500px; text-align:center; color:blue;">
          <h1>WanderLuxe Tours</h1>
        </td>
        
          <td style="width:1900px;text-align:right;">
            <button type="submit" name="packages" formaction=" view/packages.php" style="height: 30px; width: 30px; padding: 0; border: none;">
            <a href="view/medicines.php"> <img src="assets/image/package/pac.jpg" alt="Submit" width="30" height="30">
            </button>
          </td>
          <td>
            <button type="submit" name="notification"formaction=" view/notification.php" style="height: 55px; width: 55px; padding: 0; border: none;">
              <img src="assets/image/package/bell.jpg" alt="Submit" width="55" height="55">
            </button>
          </td>
          <td><button type="submit" name="profile" formaction=" view/login.php"style="height: 40px; width: 40px; padding: 0; border: none;">
              <img src="assets/image/package/profile.jpg" alt="Submit" width="40" height="40">
            </button></td>
          <td><button type="submit" name="logout" style="height: 45px; width: 45px; padding: 0; border: none;">
              <img src="assets/image/package/logout.jpg" alt="Submit" width="45" height="45">
            </button></td>
        
      </tr>


    </table>

    <center>
      <table>
        <tr>
          <h1>Our Packages</h1>
        </tr>
        <tr>
          <td style="padding: 10px;"><img src="assets/image/package/cox.jpeg" alt="cox" width="300px" height="250px"> </td>
          <td style="padding: 10px;"><img src="assets/image/package/stmart.jpeg" alt="stmart" width="300px" height="250px"></td>
          <td style="padding: 10px;"><img src="assets/image/package/sajack.jpeg" alt="sajack" width="300px" height="250px"></td>
        </tr>
        <tr>
          <td align="center">
            <h2>Deep drive into the Sea</h2>
          </td>
          <td align="center">
            <h2>The Best Of The Maldives</h2>
          </td>
          <td align="center">
            <h2>Hill Kingdom Tour</h2>
          </td>
        </tr>
        <tr>
          <td align="center">
            <p>"Embark on an abyssal journey,</P>
            <p>exploring depths and encountering marine </p>
            <p>wonders in a deep-sea adventure of discovery."</p>
          </td>
          <td align="center">
            <p>"Dive into the paradise of Hill </p>
            <p> Immerse in turquoise waters, vibrant coral reefs, </p>
            <p>and unrivaled luxury escapes."</p>
          </td>
          <td align="center">
            <p>"Embark on a regal journey.</p>
            <p> Majestic landscapes, and enchanting culture </p>
            <p>await in this captivating exploration."</p>
          </td>
        </tr>
        <tr>
          <td align="center"><button type="submit" name="cox"><a href="view/packages.php">Book Now</a></button></td>
          <td align="center"><button type="submit" name="stmart"><a href="view/packages.php">Book Now</a></button></td>
          <td align="center"><button type="submit" name="sajack"><a href="view/packages.php">Book Now</a></button></td>
        </tr>

        

      </table>
    </center>

  </form>
</body>
</html>