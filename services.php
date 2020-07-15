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
    .tags{
        position: absolute;
        top: 20vh;
        color: #232323;
        background-color: #bb8b00;
        text-align: center;
        font-size: 6vh;
        width: 70%;
        height: 10vh;
        margin-left: 15%;
        font-weight: 1000;
        font-family: cooper black;
    }
    a{ text-decoration: none; }
    a:link, a:visited { color:white }
    a:hover{ text-decoration: none; color: red }

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

    /* ----------------------Booking Page Styling---------------------- */
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

<div id="book" class="tags"><p> BOOK YOUR SERVICE </p></div>

<div id="info_table">
    <form id="car_info" action="process.php" method="POST">
        <label for="service" class='keys'> Service Type* </label>
        <select id='service' name='service'>
            <option value="Oil Change"> Oil Change </option>
            <option value="Brake Pads"> Brake Pads </option>
        </select>

        <label for="name" class='keys'> Name </label>
        <input type="text" class='values' id="name" name="name" placeholder="Bruce Wayne">

        <label for="contact" class='keys'> Contact* </label>
        <input type="text" class='values' id="contact" name="contact" placeholder="604-BAT-MAN or bruce@wayneenterprise.com" required>

        <label for="city" class='keys'> City* </label>
        <input type="text" class='values' id="city" name="city" placeholder="Gotham" required>

        <label for="manufacturer" class='keys'> Manufacturer </label>
        <input type="text" class='values' id="manufacturer" name="manufacturer" placeholder="Batcave">

        <label for="model" class='keys'> Model </label>
        <input type="text" class='values' id="model" name="model" placeholder="Batmobile">

        <label for="year" class='keys'> Year </label>
        <input type="text" class='values' id="year" name="year" placeholder="2014">

        <label for="description" class='keys'> Additional Info </label>
        <textarea type="text" class='values' id="description" name="description" placeholder="My Batmobile needs a synthetic oil change and some new brake pads"></textarea>

        <input type="Submit" name="Clicked" value="Book Now">
    </form>
</div>

<!-- Bootstrap JavaScript Code -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>