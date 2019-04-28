 <?php
include '../partials/header.php';
include '../partials/navbar.php';
?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Szukaj</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <script type="text/javascript" src="ajax.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Szukaj W naszej Bazie pojazdów</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-btn" ><button   class="btn btn-primary" >Szukaj</button></span>
     <input type="text" name="search_text" id="search_text" placeholder="Kampery Oznaczamy Literką C a Limuzyny L" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  <script src="../partials/slider.js"></script>

 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

<!-- <!doctype html>

<head>
    <script type="text/javascript" src="ajax.js"></script>
</head>

<body>


    <div class="container">
        <div class="row">



            <div class="col-sm-12 text-center">

                <form>
                    <select name="users"  onchange="showCar(this.value)">
                        <option value="D">Wybierz Typ Samochodu:</option>
                        <option value="C">Kamper</option>                     
                        <option value="L">Limuzyna</option>
                    </select>
                </form>
                <br>
                <div id="txtHint"></div>
                

            </div>

        </div>
    </div>


</body>

</html>  -->