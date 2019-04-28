<?php
    include '../partials/header.php';
    include '../partials/navbar.php';
?>


<!doctype html>

  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img class="img-fluid" src="../Imgs/campm.png" alt="Tu powinno być zdjęcie kampera, tylko coś nie pykło.">
            </div>                     
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="Big"> <?php 
        if($_SESSION['reserved'] == true) {
            echo $_SESSION['car'] .' jest zarezerowany z podanym terminie';
        } else {

            echo $_SESSION['car'] .' zarezerwowano';
        }
        ?></p>
            <p class="Big">Limuzyny Też super</p>
            <p class="BigBold">Nasza oferta to sztos więc, <strong>Wynajmij sobie kampera!!!</strong></p>
            <p class="Normal">Bacon ipsum dolor amet ball tip turducken corned beef jerky short ribs beef ribs pork chop swine chicken flank tenderloin rump buffalo. Bresaola swine frankfurter bacon, tenderloin sirloin shoulder capicola pork loin meatloaf alcatra jerky t-bone. Sausage venison capicola pastrami chuck buffalo tongue spare ribs shoulder. </p>

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