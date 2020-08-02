<!DOCTYPE html>
<html>
<head>
<title> AutoMo </title>
<!-- Bootstrap CSS Code -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/AutoMo.css">
</head>

<body>
    <div id='nav_bar'>
        <table id='nav_table'>
            <tr id='nav_row' z-index=100>
                <th class='nav_items'> <a href="index.php"> <b> Home </b> </a></th>
                <th class='nav_items'> <a href="index.php#service_tag"> <div class='items'> Services </div> </a> </th>
                <th class='nav_items'> <a href="index.php#about_tag"> <div class='items'> About </div> </a></th>
                <th class='nav_items'> <a href="services.php"> <div class='items'> Book </div> </a></th>
            </tr>
        </table>
    </div>

    <div id="appointment_div">
        <table id="appointment_table">
            <tr id="appointment_headings">
                <th class='data'> Service ID </th>
                <th class='data'> Service Type </th>
                <th class='data'> Name </th>
                <th class='data'> Contact </th>
                <th class='data'> Make </th>
                <th class='data'> Model </th>
                <th class='data'> Year </th>
                <th class='data'> City </th>
            </tr>
            <?php
                $server_name = "localhost";
                $database = "servicetickets";
                $username = "root";
                $password = "";

                $connection = mysqli_connect($server_name, $username, $password, $database);

                if ($connection-> connect_error) {
                    die("Connection failed:". $connection-> connect_error);
                }

                $sql = "SELECT * FROM service ORDER BY service_id DESC LIMIT 10";
                $result = $connection-> query($sql);

                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr class='row'><td class='data'>". $row['service_id']. "</td><td class='data'>".
                                $row['service_type']."</td><td class='data'>".
                                $row['username']."</td><td class='data'>".
                                $row['contact']."</td><td class='data'>".
                                $row['make']."</td><td class='data'>".
                                $row['model']."</td><td class='data'>".
                                $row['years']."</td><td class='data'>".
                                $row['city']."</td></tr><tr class='descrip_row'><td class='data_descrip' colspan=8>".
                                $row['descrip']."</td></tr>";
                    }
                    echo "</table>";
                }
                else { 
                    echo "No appoints booked yet";
                }

                $connection -> close();
            ?>
        </table>
    </div>
</body>
</html>