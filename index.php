<!DOCTYPE html>
<html>

<head>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<!-- Bootstrap CSS Code -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- My CSS code -->
<link rel="stylesheet" type="text/css" href="CSS/AutoMo.css"/>
<title> Mohsen's Shop </title>
</head>


<body>
<div id='nav_bar'>
    <table id='nav_table'>
        <tr id='nav_row' z-index=100>
            <th id='home' class='nav_items'> <a href="index.php"> <b> Home </b> </a></th>
            <th class='nav_items'> <a href="#service_tag"> <div class='items'> Services </div> </a> </th>
            <th class='nav_items'> <a href="#about_tag"> <div class='items'> About </div> </a></th>
            <th class='nav_items'> <a href="services.php"> <div class='items'> Book </div> </a></th>
        </tr>
    </table>
</div>

<image id="AutoMo" src='Images/AutoMo.png'></image>
<div id="tagline"> <h2> Why not get your car services delivered to you? </h2> </div>
<div id='service_tag' class="tags"> Services </div>

<div id='oil' class='services'></div>
<a href="services.php"><div id='oil_name' class='service_name' onmouseover="oil_gif()" onmouseout="oil_image()"><h2> Oil Change </h2></div></a>
<div id='breaks' class='services'></div>
<a href="services.php"><div id='breaks_name' class='service_name' onmouseover="breakpad_gif()" onmouseout="breakpad_image()"><h2> Brake Pads </h2></div></a>

<div id="about_section">
    <div id='about_tag' class="tags"> About </div>
    <div id='right_about' class="about">
        <div id="about_para"> <p id="headline"> <b> Hello and welcome to <a id='secret' href="login.html">AutoMo!</a> </b> </p> <p> Ever thought about having an oil or brake change at the comfort of your own home? Well, that's exactly what we do. We will come to you whenever you want and service your car efficiently with no mess! With us, not only are you comfortable at home, but you also avoid the high prices of the dealerships and untrustworthy mechanics. Just create a service ticket and we will get back to you with a maintainance package that best suits you!  </p></div>
    </div>
    <div id='left_about' class="about"></div>
</div>
<div id="footer">
    <img id="footer_logo" height="65" width="130" src='Images/AutoMo.png'>
    <a href='facebook.com'> <img id="facebook_logo" class="contact" height="39" width="39" src="Images/Facebook.png"> </a>
    <a href='instagram.com'> <img id="instagram_logo" class="contact" height="50" width="50" src="Images/Instagram.png"> </a>
    <a href='gmail.com'> <img id="email_logo" class="contact" height="50" width="50" src="Images/Mail.png"> </a>
    <h6 id="by"> Built and Maintained <br> By Sheikh Billah </h6>
</div>

<script type="text/javascript" src="JS/AutoMo.js">
<!-- Bootstrap JavaScript Code -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>