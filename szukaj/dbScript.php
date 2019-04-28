<?php
    session_start();
    require_once "dbconnect.php";

    $connect = @new mysqli($host,$db_user,$db_password,$db_name);

    if($connect->connect_errno!=0) {
        echo "Error $connect->connect_errno Description: $connect->connect_error";
    } else {
        $car = $_POST['car'];
        $dataOD = $_POST['dataOD'];
        $dataDO = $_POST['dataDO'];
        $phoneNumber = $_POST['phoneN'];
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $_SESSION['car'] = $car;

        $sqlCheck = "SELECT * FROM wypozyczenia WHERE Data='$dataOD'";

        if($result = @$connect->query($sqlCheck)) {
            $reservation = $result->num_rows;

            if($reservation>0) {
                $_SESSION['reserved'] = false;
            } else {
                $_SESSION['reserved'] = false;
                // $sqlAdd = "INSERT INTO $car VALUES ('$data', 1)";
                $dbAdd= "INSERT INTO wypozyczenia VALUES ('', '$car', '$firstName', '$lastName', '$phoneNumber', '$dataOD', '$dataDO')";
                $connect->query($dbAdd);
            }
        }

        $connect-> close();
    }
?> 
<!-- ogarnąć jak przekazywana jest wartość q
https://www.w3schools.com/php/php_ajax_database.asp
 -->