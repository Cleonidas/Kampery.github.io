<?php
    require_once "../scripts/dbconnect.php";
    session_start();
    $car = $_POST['carName'];
    $cena = $_POST['cena'];

    if($car == '') {
        $car = "%";
    }
    if($cena == '') {
        $cena = "%";
    }
    $sqlQuery = "";

    $connect = @new mysqli($host,$db_user,$db_password,$db_name);
    if($connect->connect_errno!=0) {
        echo "Error $connect->connect_errno Description: $connect->connect_error";
    } else {
        if($result = @$connect->query(createQuery($car, $cena))) {
            $data[] = array();
            while($row =mysqli_fetch_assoc($result))
            {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo "query not sent";
        }
    }
    $connect-> close();

    function createQuery($car, $cena) {
        $sqlQuery = "SELECT * FROM wypozyczenia as w LEFT JOIN samochody as s on w.Samochod=s.ID WHERE s.Typ LIKE '$car' AND s.Cena LIKE '$cena' ORDER BY s.Cena";
        return $sqlQuery;
    }

?>

