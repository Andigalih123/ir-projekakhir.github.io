<?php 
$konek = mysqli_connect("localhost","root","") or die (mysql_error());
$conn = mysqli_select_db($konek,"pencarianuas") or die (mysql_error());
 ?>