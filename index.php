<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
<?php


 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Сайт Димона</title>
</head>

<body>

<?php
include ("Reg.php");

if($login==0)
{
	
echo "<p>Регистрация</p><Br>";


echo "<center> <Br>Password: $_COOKIE[Password] </center> ";
echo "<form action 'index.php' method='get'>";
echo "<center> <input type='text' name='login'  > </center>";
echo "<center> Профиль <Br>Password: $_COOKIE[FirstName] </center>";
echo "<center><input type='text' name='pass' size='31' ></center>";
echo "<center><input type='submit' value='Вход' ><Br></center>";
 echo "<input type='hidden'name='user1' value='1' >";
echo "</form>";
}
else
{
echo"Поздравляем вы вошли в систему!";	
}
?>
</body>
</html>
