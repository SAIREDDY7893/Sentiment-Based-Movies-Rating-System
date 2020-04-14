<?php
if(isset($_POST["click1"]) && ($_POST["rate11"])) 
{
$rating11=(htmlentities($_POST['click1']));
$url=("?rating11=".$rating11);
header('Location:avatar_s.php'.$url);
}

else if(isset($_POST["click2"]) && ($_POST["rate11"])) 
{
$rating11=(htmlentities($_POST['click2']));
$url=("?rating11=".$rating11);
header('Location:avatar_s.php'.$url);

}
else if(isset($_POST["click3"]) && ($_POST["rate11"])) 
{
$rating11=(htmlentities($_POST['click3']));
$url=("?rating11=".$rating11);
header('Location:avatar_s.php'.$url);

}
else if(isset($_POST["click4"]) && ($_POST["rate11"])) 
{
$rating11=(htmlentities($_POST['click4']));
$url=("?rating11=".$rating11);
header('Location:avatar_s.php'.$url);

}
else if(isset($_POST["click5"]) && ($_POST["rate11"])) 
{
$rating11=(htmlentities($_POST['click5']));
$url=("?rating11=".$rating11);
header('Location:avatar_s.php'.$url);

}


?>
<html>
<head>
<title>
Avatar Review
</title>
</head>
<center>
<img src="https://entertainmenttalk.com.au/wp-content/uploads/2016/03/avatar-close-caption-sonogram-studio-02.jpg" border=3 height=250 width=400 </img><br>
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
<input name="click1" value="1" type="radio">1
<input name="click2" value="2" type="radio">2
<input name="click3" value="3" type="radio">3
<input name="click4" value="4" type="radio">4
<input name="click5" value="5" type="radio">5       
</div>
</center>
<div>
<center><input type="submit" name="rate11" value="submit"></center>
</form>
</td>
</tr>
   </table>
</body>
</center>
</html>



