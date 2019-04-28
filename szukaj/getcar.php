<?php
include "../scripts/dbconnect.php";

$q = intval($_GET["q"]);

$con = mysqli_connect($host,$db_user,$db_password,$db_name);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"wypo");
$sql="SELECT * FROM samochody WHERE Typ = '.$q.' ORDER BY Cena asc";
$result = mysqli_query($con,$sql);

echo "$q <table>
<tr>
<th>ID</th>
<th>Samochod</th>
<th>cena</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Samochod'] . "</td>";
    echo "<td>" . $row['Cena'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>