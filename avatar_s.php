<?php
$host = "localhost";
$db_name = "mydatabase";
$username = "root";
$password = "1015";
$connection = null;
try{
$connection = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
$connection->exec("set names utf8");
}catch(PDOException $exception){
echo "Connection error: " . $exception->getMessage();
}

$dfg=$_GET['rating11'];
$query0=("insert into avatar(rating) values($dfg)");
$connection->query($query0);
?>

<html>
<center>
<h1>Thank You for rating!!</h1>
<button onclick="window.location.href = 'movie_form.php'">HOME</button>
</center>

</html>








