<?php
require_once "../scripts/dbconnect.php";
$connect = mysqli_connect("localhost", "root", "", "wypo");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM Samochody
  WHERE ID LIKE '%".$search."%'
  OR Cena LIKE '%".$search."%' 
  OR Samochod LIKE '%".$search."%' 
  OR Typ LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM Samochody ORDER BY ID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr class="bg-primary">
     <th>ID</th>
     <th>Samochod</th>
     <th>Cena</th>
     <th>Typ</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr class="table-primary" >
    <td>'.$row["ID"].'</td>
    <td>'.$row["Samochod"].'</td>
    <td>'.$row["Cena"].'</td>
    <td>'.$row["Typ"].'</td>   
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
