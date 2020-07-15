<?php
if (isset($_POST['Clicked'])){

    # Information in the form
    $service_type = $_POST['service'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $make = $_POST['manufacturer'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $description = $_POST['description'];

    # Database Information
    $server = "localhost";
    $DBUser = "root";
    $DBPassword = "";
    $DBName = "servicetickets";

    # Database Connection
    $connection = mysqli_connect($server, $DBUser, $DBPassword, $DBName);
    if (!$connection){
        die("Connection Failed: ".mysqli_connect_error());
        exit();
    }

    # Database Operations (Create only)
    else {
        $sql = "INSERT INTO service (service_type, username, contact, city,  make, model, years, descrip) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: services.php?error=emptyfields&name=".$name."&contact=".$contact."&city=".$city."&make=".$make."&model=".$model."&year=".$year."&des=".$description);
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ssssssss", $service_type, $name, $contact, $city, $make, $model, $year, $description);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            header("Location: thanks.html");
            exit();
        }

    }

    # Closing out SQL statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($stmt);
}

# If the user came to this page without clicking submit, redirect them to the service page
else{
    header("Location: services.php");
    exit();
}
?>