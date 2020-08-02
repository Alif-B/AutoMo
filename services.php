<!DOCTYPE html>
<html>

<head>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<!-- Bootstrap CSS Code -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- My CSS Code -->
<link rel="stylesheet" type="text/css" href="CSS/AutoMo.css"/>

<title> Mohsen's Shop </title>
</head>


<body>
<div id='nav_bar'>
    <table id='nav_table'>
        <tr id='nav_row' z-index=10>
            <th class='nav_items'> <a href="index.php"> <b> Home </b> </a></th>
            <th class='nav_items'> <a href="index.php#service_tag"> <div class='items'> Services </div> </a> </th>
            <th class='nav_items'> <a href="index.php#about_tag"> <div class='items'> About </div> </a></th>
            <th class='nav_items' id='hose'> <a href="#nav_bar"> <div class='items'> Book </div> </a></th>
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