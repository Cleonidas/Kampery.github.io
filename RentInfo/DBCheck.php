<?php
    include '../partials/header.php';
    require_once "../scripts/dbconnect.php";
    session_start();

    $connect = @new mysqli($host,$db_user,$db_password,$db_name);

    if($connect->connect_errno!=0) {
        echo "Error $connect->connect_errno Description: $connect->connect_error";
    } else {
        $car = $_POST['car'];
        $dataOD = $_POST['dataOD'];
        $dataDO = $_POST['dataDO'];
        $phoneNumber = $_POST['Phone'];
        $firstName = $_POST['name'];
        $lastName = $_POST['lname'];
        $_SESSION['car'] = $car;
        $_SESSION['reserved'] = false;

        // $sqlCheck = "SELECT * FROM wypozyczenia WHERE Data='$dataOD'"; // ????????
        $SQLquery = "SELECT * FROM wypozyczenia WHERE (Od <= '$dataDO') AND (Do >= '$dataOD') AND Samochod = '$car'";

        // (StartA <= EndB) and (EndA >= StartB)

        if($result = @$connect->query($SQLquery)) {
            $reservation = $result->num_rows;

            if($reservation>0) {
                $_SESSION['reserved'] = true;
            } else {
                $_SESSION['reserved'] = false;
                // $sqlAdd = "INSERT INTO $car VALUES ('$data', 1)";
                $dbAdd= "INSERT INTO wypozyczenia VALUES (null, '$car', '$firstName', '$lastName', '$phoneNumber', '$dataOD', '$dataDO')";
                $connect->query($dbAdd);
            }
        }

        $connect-> close();
    }
?>
<?php
    include '../partials/header.php';
    include '../partials/navbar.php';
?>


<!doctype html>

  <body>
    
    <div class="container">
        
                              
      
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="Big"> 
                    <?php 
        if($_SESSION['reserved'] == true) {
            echo $_SESSION['car'] .' jest zarezerowany z podanym terminie';
        } else {

            echo $_SESSION['car'] .' zarezerwowano';
        }
        ?>
        </p>
          

            </div>  
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
