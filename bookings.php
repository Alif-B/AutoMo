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
                <th class='nav_items'> <a href="services.php"> <div class='items'> Booking </div> </a></th>
            </tr>
        </table>
    </div>

    <div id="appointment_div">
        <?php
            $server_name = "localhost";
            $database = "u767810112_servicetickets";
            $username = "u767810112_mohsen";
            $password = "Nasusisbroken1";

            $connection = mysqli_connect($server_name, $username, $password, $database);

            if ($connection-> connect_error) {
                die("Connection failed:". $connection-> connect_error);
            }

            $sql = "SELECT * FROM service ORDER BY service_id DESC LIMIT 10";
            $result = $connection-> query($sql);

            if ($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()){
                    echo "<table class='appointment_cards'><tr class='customer_name'><td colspan=2>". $row['username']. "</td></tr><tr><td class='label'> Service # <td class='data'>".
                    $row['service_id']."</td></tr><tr><td class='label'> Service Type <td class='data'>".
                    $row['service_type']."</td></tr><tr><td class='label'> Contact <td class='data'>".
                    $row['contact']."</td></tr><tr><td class='label'> Make <td class='data'>".
                    $row['make']."</td></tr><tr><td class='label'> Model <td class='data'>".
                    $row['model']."</td></tr><tr><td class='label'> Year <td class='data'>".
                    $row['years']."</td></tr><tr><td class='label'> City <td class='data'>".
                    $row['city']."</td></tr><tr><td class='label'> Description <td class='data'>".
                    $row['descrip']."</td></tr></table>";
                }
                echo "</br></br>";
            }
            else { 
                echo "No appoints booked yet";
            }

            $connection -> close();
        ?>
    </div>
</body>
</html>