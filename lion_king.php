<?php
if(isset($_POST["click11"]) && ($_POST["rate22"])) 
{
$rating22=(htmlentities($_POST['click11']));
$url=("?rating22=".$rating22);
header('Location:lion_king_s.php'.$url);
}

else if(isset($_POST["click22"]) && ($_POST["rate22"])) 
{
$rating22=(htmlentities($_POST['click22']));
$url=("?rating22=".$rating22);
header('Location:lion_king_s.php'.$url);

}
else if(isset($_POST["click33"]) && ($_POST["rate22"])) 
{
$rating22=(htmlentities($_POST['click33']));
$url=("?rating22=".$rating22);
header('Location:lion_king_s.php'.$url);

}
else if(isset($_POST["click44"]) && ($_POST["rate22"])) 
{
$rating22=(htmlentities($_POST['click44']));
$url=("?rating22=".$rating22);
header('Location:lion_king_s.php'.$url);

}
else if(isset($_POST["click55"]) && ($_POST["rate22"])) 
{
$rating22=(htmlentities($_POST['click55']));
$url=("?rating22=".$rating22);
header('Location:lion_king_s.php'.$url);

}
?>
?>
<html>
<head>
<title>
Avatar Review
</title>
</head>
<center>
<img src="https://www.fanbolt.com/wp-content/uploads/2019/02/Lion-King.jpg" border="3" height="250" width="400"  </img><br>
   <table border="3" height="250" width="20%" cellpadding="30">
<tr>
<td >
 <form name="test" action"" method="post">

<body>
<center>
<h4>Please give the rating below</h4>
</center>
<center>
<div>
<input name="click11" value="1" type="radio">1
<input name="click22" value="2" type="radio">2
<input name="click33" value="3" type="radio">3
<input name="click44" value="4" type="radio">4
<input name="click55" value="5" type="radio">5       
</div>
</center>
<div>
<center><input type="submit" name="rate22" value="submit"></center>
</form>
</td>
</tr>
   </table>
</body>
</center>
</html>

