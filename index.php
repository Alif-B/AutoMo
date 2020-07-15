<!DOCTYPE html>
<html>

<head>
<!-- Bootstrap CSS Code -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<title> Mohsen's Shop </title>
<style>
    html{
        scroll-behavior: smooth;
    }
    body{
        background-color: black;
        background-image: url('Images/Car.png');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .services{
        border-radius: 50%;
        width: 250px;
        height: 250px;
        position: absolute;
        top: 125vh;
        background-repeat: no-repeat;
        background-size: cover;
        cursor: pointer;
    }
    .tags{
        position: absolute;
        top: 105vh;
        color: white;
        text-align: center;
        font-size: 50px;
        width: 100%;
        font-weight: 1000;
        font-family: cooper black;
    }
    a{ text-decoration: none; }
    a:link, a:visited { color:white }
    a:hover{ text-decoration: none; color: red }

    #AutoMo{
        width: 80vw;
        height: auto;
        margin-left: 10vw;
        margin-right: auto;
        position: absolute;
        top: 0vh;
        z-index: -10;
    }
    #tagline{
        width: 100%;
        position: absolute;
        top: 50vh;
        color: white;
        text-align: center;
        font-family: cooper black;
    }


    /* ----------------------Navbar Styling---------------------- */
    #nav_bar{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        height: 10vh;
        width: 100%;
        background-color: #232323;
        color: white;
        z-index: -1;
    }
    #nav_table{
        height: 100%;
        z-index: 100;
    }
    .nav_items{
        width: 10vw;
        height: 100%;
        text-align: center;
        font-size: 25px;
        padding: 2.5vh;
    }
    #home{
        background-color: darkslategray;

    }
    .items{
        height: 100%;
        width: 100%;
        display: block;
        text-decoration: none;
    }


    /* ---------------------Services Styling----------------------- */
    #oil{
        left: 25vw;
        background-image: url('Images/EngineOilBG.PNG');
    }
    #breaks{
        right: 25vw;
        background-image: url('Images/BreakPadsBG.PNG');
    }
    #oil_name{
        left: 25vw;
    }
    #breaks_name{
        right: 25vw;
    }
    .service_name{
        width: 250px;
        height: 250px;
        position: absolute;
        top: 125vh;
        color: white;
        text-align: center;
        animation-name: services_in;
        animation-duration: 2s;
        animation-fill-mode: forwards;
    }
    .service_name:hover{
        animation-name: services_out;
        animation-duration: 1s;
        animation-fill-mode: forwards;
    }

    @keyframes services_out {
        0%      {color: transparent;}
        100%    {color: white; top: 115vh; height: 325px;}
    }
    @keyframes services_in {
        0%      {color: white; top: 115vh;}
        100%    {color: transparent; top: 125vh;}
    }

    /* ---------------ABOUT SECTION STYLING------------ */
    #about_section{
        position: absolute;
        height: 100vh;
        width: 100%;
        top: 170vh;
    }
    #about_tag{
        top: 0;
    }
    .about{
        position: absolute;
        height: 90%;
        width: 50%;
        margin-top: 13vh;

    }
    #right_about{
        margin-left: 50%;
        margin-right: auto;
        float: right;
        background-color: #bb8b00;
    }
    #left_about{
        margin-left: 0;
        margin-right: auto;
        float: left;
        background-color: #232323;
        animation: infinite;
        animation-name: quotes_slides;
        animation-duration: 45s;
        background-repeat: no-repeat;
        background-size: contain, cover;
    }
    #about_para{
        position: absolute;
        width: auto;
        height: auto;
        top: 15vh;
        margin-left: 15%;
        margin-right: 15%;
        text-align: center;
        font-family: cooper black;
    }

    @keyframes quotes_slides {
        0%      {background-image: url("Images/Quotes1.png");}
        15%     {background-image: url("Images/Quotes1.png");}
        20%     {background-image: url("Images/Quotes2.png");}
        35%     {background-image: url("Images/Quotes2.png");}
        40%     {background-image: url("Images/Quotes3.png");}
        55%     {background-image: url("Images/Quotes3.png");}
        60%     {background-image: url("Images/Quotes4.png");}
        75%     {background-image: url("Images/Quotes4.png");}
        80%     {background-image: url("Images/Quotes5.png");}
        95%     {background-image: url("Images/Quotes5.png");}
        100%    {background-image: url("Images/Quotes1.png");}
    }

    /* -------------FOOTER STYLINGS-------------- */
    #footer{
        background-color: black;
        position: absolute;
        text-align: center;
        height: 10vh;
        width: 100%;
        top: 273vh;
    }
    #footer_logo{
        position: absolute;
        height: 8vh;
        width: 16vh;
        left: 1px;
        top: 2.5vh;
    }
    #by{
        position: absolute;
        color: white;
        width: 10vw;
        height: 8vh;
        left: 88vw;
        top: 2.5vh;
    }
    .contact{
        position: relative;
        top: 2.5vh;
    }

</style>
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
        <div id="about_para"> <h1> <b> Hello and welcome to AutoMo! </b> </h1> <br/><br/> <h4> Ever thgouht about having an oil or brake change at the comfort of your own home? Well, that's exactly what we do. I will come to you whenever you want and I will service your car efficiently with no mess! With us, not only are you comfortable at home, but you also avoid the high prices of the dealerships. Just create a service ticket and we will get back to you with a maintainance package that best suits you!  </h4></div>
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




<script>
    // Services Animations
    function oil_gif(){
        document.getElementById('oil').style.backgroundImage = "url('Images/EngineOil.gif')";
        
    }
    function oil_image(){
        document.getElementById('oil').style.backgroundImage = "url('Images/EngineOilBG.PNG')";
    }
    function breakpad_gif(){
        document.getElementById('breaks').style.backgroundImage = "url('Images/BreakPads.gif')";
        document.getElementById('breaks').style.animationName = "services";
    }
    function breakpad_image(){
        document.getElementById('breaks').style.backgroundImage = "url('Images/BreakPadsBG.PNG')";
    }
</script>

<!-- Bootstrap JavaScript Code -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>