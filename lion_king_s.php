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

$hyg=$_GET['rating22'];
$query1=("insert into lion_king(rating) values($hyg)");
$connection->query($query1);
?>

<html>
<center>
<h1>Thank You for rating!!</h1>
<button onclick="window.location.href = 'movie_form.php'">HOME</button>
</center>

</html>



