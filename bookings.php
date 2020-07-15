<!DOCTYPE html>
<html>
<head>
<title> AutoMo </title>
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
        left: 0;
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
    /*--------------------------- Thanks for oderding page -------------------------- */
    #thanks{
        height: 30vh;
        width: 100%;
        text-align: center;
        background-color: #232323;
        position: absolute;
        top: 40vh;
        left: 0;
        opacity: 0.9;
    }
    #thnx_note{
        top: 0vh;
        color: #bb8b00;
    }
    /* ------------------------ Booking Page Styling -----------------------*/
    #info_table{
        background-color: #232323;
        width: 70%;
        margin-left: 15%;
        padding: 20px 35px;
        position: absolute;
        top: 30vh;
        color: #bb8b00;
        font-weight: 900;
        opacity: 0.85;
    }
    input[type=text], select, textarea{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        box-sizing: border-box;
    }
    input[type=submit]{
        width: 100%;
        background-color: darkslategray;
        color:white;
        border: none;
        cursor: pointer;
        padding: 12px 20px;
        margin: 8px 0;
    }

</style>
</head>

<body>
    <div id='nav_bar'>
        <table id='nav_table'>
            <tr id='nav_row' z-index=100>
                <th class='nav_items'> <a href="index.php"> <b> Home </b> </a></th>
                <th class='nav_items'> <a href="#service_tag"> <div class='items'> Services </div> </a> </th>
                <th class='nav_items'> <a href="index.php#about_tag"> <div class='items'> About </div> </a></th>
                <th class='nav_items' id='home'> <a href="#nav_bar"> <div class='items'> Book </div> </a></th>
            </tr>
        </table>
    </div>

    <div id="thanks">
        <p id="thnx_note" class="tags"> Thanks you for choosing AutoMo! <br> We will contact you shortly <p>
    </div>
</body>
</html>
<?php
    $server_name = "localhost";
    $database = "servicetickets";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($server_name, $username, $password, $database)
?>