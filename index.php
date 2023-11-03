<!DOCTYPE html>
<html>

<head>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<link rel="icon" href="Images/favicon.ico" type="image/gif" sizes="16x16">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Pacifico&family=Rajdhani:wght@700&display=swap&family=Teko:wght@300;600&display=swap" rel="stylesheet">
<!-- Bootstrap CSS Code -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- My CSS code -->
<link rel="stylesheet" type="text/css" href="CSS/AutoMo.css"/>
<title> AutoMo Shop </title>
</head>


<body>
<div id='nav_bar'>
    <table id='nav_table'>
        <tr id='nav_row' z-index=100>
            <th class='nav_items'> <a href="index.php"> <b> Home </b> </a></th>
            <th class='nav_items'> <a href="#service_tag"> <div class='items'> Services </div> </a> </th>
            <th class='nav_items'> <a href="#about_tag"> <div class='items'> About </div> </a></th>
            <th class='nav_items'> <a href="services.php"> <div class='items'> Booking </div> </a></th>
        </tr>
    </table>
</div>

<image id="AutoMo" src='Images/AutoMo.png'></image>
<div id="tagline"> Why not get your car services delivered to you? </div>




<div id='job-slide'></div>




<div id="service_section">
    <div id='service_tag' class="tags"> Services </div>

    <!-- First Row of Services -->

    <div id='reg_oil' class='services'>
        <div class='service_name'> Regular Oil Change </div>
        <div class='service_price'> $ 59.99 </div>
        <ul class='service_description'> 
            <li> Upto 5L of Oil & Filter Included </li>
            <li> 50% off if you own Oil & Filter </li> 
            <li> Disposal of Old Oil and Filter </li>
        </ul>
        <a href="services.php?service=1"> <div class='service_book'> BOOK </div> </a>
    </div>

    <div id='synthetic_oil' class='services'>
        <div class='service_name'> Full Synthetic Oil Change </div>
        <div class='service_price'> $ 64.99 </div>
        <ul class='service_description'> 
            <li> For non European Cars </li>
            <li> Oil Filter Included </li> 
            <li> Disposal of old Oil and Filter </li>
        </ul>
        <a href="services.php?service=2"> <div class='service_book'> BOOK </div> </a>
    </div>

    <div id='synthetic_oil_eu' class='services'>
        <div class='service_name'> Full Synthetic Oil Change </div>
        <div class='service_price'> $ 94.99 + </div>
        <ul class='service_description'> 
            <li> For European Cars </li>
            <li> Oil Filter Included </li> 
            <li> Disposal of old Oil and Filter </li>
        </ul>
        <a href="services.php?service=3"> <div class='service_book'> BOOK </div> </a>
    </div>

    <!-- Second row of Services -->

    <div id='reg_oil2' class='second_services'>
        <div class='service_name'> Brake Services </div>
        <div class='service_price'> $ 79.99 </div>
        <ul class='service_description'> 
            <li> Brake Pads Included </li>
            <li> Rotors Sold Seperately </li> 
            <li> Disposal of old Pads & Rotors </li>
        </ul>
        <a href="services.php?service=4"> <div class='service_book'> BOOK </div> </a>
    </div>

    <div id='synthetic_oil2' class='second_services'>
        <div class='service_big_name'> Brake Bleeding / Brake Fluid Flush </div>
        <div class='service_price'> $ 79.99 </div>
        <ul class='service_description'> 
            <li> Full Brake System Flush </li>
            <li> Brake Fluid Included </li> 
            <li> Disposal of old Brake Fluid </li>
        </ul>
        <a href="services.php?service=5"> <div class='service_book'> BOOK </div> </a>
    </div>

    <div id='synthetic_oil_eu2' class='second_services'>
        <div class='service_big_name'> Automatic Trasmission Fluid </div>
        <div class='service_price'> $ 79.99 </div>
        <ul class='service_description'> 
            <li> Upto 3L of Fluid </li>
            <li> Oil Filter Included </li> 
            <li> Disposal of old Transmission Fluid </li>
        </ul>
        <a href="services.php?service=6"> <div class='service_book'> BOOK </div> </a>
    </div>

    <!-- Third row of Services -->

    <div id='reg_oil3' class='third_services'>
        <div class='service_name'> CVT Fluid Change </div>
        <div class='service_price'> $ 99.99 </div>
        <ul class='service_description'> 
            <li> Upto 4L of Fluid </li>
            <li> Drain and Refill </li> 
            <li> Disposal of old CVT Fluid </li>
        </ul>
        <a href="services.php?service=7"> <div class='service_book'> BOOK </div> </a>
    </div>

    <div id='synthetic_oil3' class='third_services'>
        <div class='service_name'> Full Interior Detail </div>
        <div class='service_price'> $ 199.99 </div>
        <ul class='service_description'> 
            <li> Interior Vacuum & Carpet Shampoo</li> 
            <li> All Dash Trim cleaned & protected </li>
            <li> Free consultation about Partial Detail </li>
        </ul>
        <a href="services.php?service=8"> <div class='service_book'> BOOK </div> </a>
    </div>

    <div id='synthetic_oil_eu3' class='third_services'>
        <div class="coming"> <div class="coming_soon"> Coming Soon </div> </div>
        <div class='service_name'> AC Recharge </div>
        <div class='service_price'> $ 59.99 </div>
        <ul class='service_description'> 
        </ul>
        <a href="services.php?service=9"> <div class='service_book'> BOOK </div> </a>
    </div>

    <!-- Fourth row of Services -->

    <div id='reg_oil4' class='fourth_services'>
        <div class="coming"> <div class="coming_soon"> Coming Soon </div> </div>
        <div class='service_name'> Windsheld Repair </div>
        <div class='service_price'> $ 69.99 </div>
        <ul class='service_description'> 
        </ul>
        <a href="services.php?service=10"> <div class='service_book'> BOOK </div> </a>
    </div>

    <div id='synthetic_oil4' class='fourth_services'>
        <div class="coming"> <div class="coming_soon"> Coming Soon </div> </div>
        <div class='service_name'> Seasonal Tire Change </div>
        <div class='service_price'> $ 19.99 </div>
        <ul class='service_description'> 
        </ul>
        <a href="services.php?service=11"> <div class='service_book'> BOOK </div> </a>
    </div>

    <div id='synthetic_oil_eu4' class='fourth_services'>
        <div class="coming"> <div class="coming_soon"> Coming Soon </div> </div>
        <div class='service_big_name'> Clear Coat Scratch Removal </div>
        <div class='service_price'> $ 59.99 </div>
        <ul class='service_description'> 
        </ul>
        <a href="services.php?service=12"> <div class='service_book'> BOOK </div> </a>
    </div>


</div>





<div id="about_section">
    <div id='about_tag' class="tags"> About </div>
    <div id='right_about' class="about">
        <div id="about_para"> <p id="headline"> <b> Welcome to <a id='secret' href="login.html">AutoMo!</a> </b> </p> <p id="about_text"> Ever thought about having your <b> car serviced from the comfort of your own home </b>? Well, that's exactly what we do. We will come to you at <b>your convenient time </b> and service your car efficiently with <b> no mess!</b> With us, not only are you comfortable at home, but you also <b> avoid the high prices </b> of the dealerships and untrustworthy mechanics. Book an appointment today and we will  get back to you with a maintainance package that best suits you!  </p> <br>
            <p id='phone_number'> For more inquiries contact us by email or instagram </p>
        </div>
    </div>
    <div id='left_about' class="about">
        <p class="instatext"> Want to see more? </p>
        <p id="instatext2" class="instatext"> Follow us on Instagram to get $5 off of your next appomintment </p>
        <a href="https://www.instagram.com/automobc/"> <p id="instatext3" class="instatext"> <u> @automobc </u> </p> </a>
    </div>
</div>



<div id="questions">
    <div id="questions_tag"> Got Questions? </div>
    <form id="question_box" action="mailto:someone@example.com" method="post" enctype="text/plain">
        <input id="question_name" class="question_boxes" type="text" name="name" placeholder="Name">
        <input id="question_email" class="question_boxes" type="text" name="mail" placeholder="E-Mail">
        <textarea id="the_question" class="question_boxes" type="text" name="comment"> </textarea> <br>
        <input id="send_question" type="submit" value="Send">
    </form>
</div>



<div id="footer">
    <a href="index.php"><img id="footer_logo" height="65" width="130" src='Images/AutoMo.png'></a>
    <div id="copyright"> 
        AutoMo BC - Automotive Services Company - A company under British Columbian law, having its official seat in Vancouver, BC, Canada. Registered with the Canadian Trade Register under the ID FM0834525 and National Business Number 77815 8261 BC0001
        <br><br> © 2021 AutoMo BC - All rights reserved
    </div>

    <h6 id="by"> Built and Maintained <br> By Alif </h6>
</div>

<script type="text/javascript" src="JS/AutoMo.js">
<!-- Bootstrap JavaScript Code -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
