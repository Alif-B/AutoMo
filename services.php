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
            <th class='nav_items'> <a href="index.php#service_tag"> <div class='items'> Services </div> </a> </th>
            <th class='nav_items'> <a href="index.php#about_tag"> <div class='items'> About </div> </a></th>
            <th class='nav_items'> <a href="#"> <div class='items'> Booking </div> </a></th>
        </tr>
    </table>
</div>

<image id="AutoMo2" src='Images/AutoMo.png'></image>

<div id="book" class="tags"><p> BOOK YOUR SERVICE </p></div>

<div id="info_table">
    <form id="car_info" action="process.php" method="POST">
        <table>
            <tr>
                <td><label for="service" class='keys'> Service Type* </label></td>
                <td><select id='service' name='service' class="values">
                    <option value="Oil Change"> Not Selected </option>
                    <option value="Oil Change"> Regular Oil Change </option>
                    <option value="Brake Pads"> Full Synthetic Oil Change </option>
                    <option value="Oil Change"> Full Synthetic Oil Change (European Car) </option>
                    <option value="Brake Pads"> Brake Services </option>
                    <option value="Oil Change"> Brake Bleeding / Brake Fluid Flush </option>
                    <option value="Brake Pads"> Automatic Trasmission Fluid </option>
                    <option value="Oil Change"> CVT Fluid Change </option>
                    <option value="Brake Pads"> Full Interior Detailing </option>
                    <option value="Brake Pads"> AC Recharge </option>
                    <option value="Brake Pads"> Windsheld Repair </option>
                    <option value="Brake Pads"> Seasonal Tire Change </option>
                    <option value="Brake Pads"> Clear Coat Scratch Removal </option>
                </select></td>
            </tr>

            <tr>
                <td><label for="name" class='keys'> Name </label> </td>
                <td><input type="text" class='values' id="name" name="name" placeholder="Bruce Wayne"> </td>
            </tr>

            <tr>
                <td><label for="contact" class='keys'> Contact* </label></td>
                <td><input type="text" class='values' id="contact" name="contact" placeholder="604-BAT-MAN or bruce@wayneenterprise.com" required></td>
            </tr>

            <tr>
                <td><label for="city" class='keys'> City* </label></td>
                <td><input type="text" class='values' id="city" name="city" placeholder="Gotham" required></td>
            </tr>

            <tr>
                <td><label for="manufacturer" class='keys'> Manufacturer </label></td>
                <td><input type="text" class='values' id="manufacturer" name="manufacturer" placeholder="Batcave"></td>
            </tr>

            <tr>
                <td><label for="model" class='keys'> Model </label></td>
                <td><input type="text" class='values' id="model" name="model" placeholder="Batmobile"></td>
            </tr>

            <tr>
                <td><label for="year" class='keys'> Year </label></td>
                <td><input type="text" class='values' id="year" name="year" placeholder="2014"></td>
            </tr>

            <tr>
                <td><label for="description" class='keys'> Additional Info </label></td>
                <td><textarea type="text" class='values' id="description" name="description" placeholder="My Batmobile needs a synthetic oil change and some new brake pads"></textarea></td>
            </tr>
        </table>
        <br>

        <input type="Submit" name="Clicked" value="Book Now"> 
    </form>
</div>

<div id="booking_footer">
    <img id="footer_logo" height="65" width="130" src='Images/AutoMo.png'>
    <div id="copyright"> 
        AutoMo BC - Holding company - A company under British Columbian law, having its official seat in Vancouver, BC, Canada. Registered with the Canadian Trade Register under the ID FM0834525 and National Business Number <br> 77815 8261 BC0001
        <br><br> © 2021 AutoMo BC - All rights reserved
    </div>

    <h6 id="by"> Built and Maintained <br> By Alif </h6>
</div>

<!-- Chnaging the selected option -->
<script src="./JS/selection.js"></script>
<!-- Bootstrap JavaScript Code -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>