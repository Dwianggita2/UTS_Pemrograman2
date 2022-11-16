<!doctype HTML>
<html>
<head>
	<title> tampilan user</title>
</head>
<body>
<h1> dashboard user</h1>

<?php
include "koneksi.php";
$sql=$koneksi->query("select * from user order by nomor ASC");

while($row= $sql->fetch_assoc()){
?>

</table>
</body>
</html>