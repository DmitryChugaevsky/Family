<?php
include ("connect.php");

if($_GET[ABC]==1)
{
	
	
$q=mysql_query("SELECT * FROM admin WHERE login='$_GET[login]' AND  pass='$_GET[pass]' ");
$n=mysql_num_rows($q);
 
if($n>0){
 setcookie("login", $_GET[login]);
 $_COOKIE["login"]=$_GET["login"];
 setcookie("pass", $_GET[pass]);
 $_COOKIE["pass"]=$_GET["pass"];
 
}
}
if($_COOKIE["login"]<>"" and $_COOKIE["pass"]<>"")
	{
		$l=$_COOKIE["login"];
		$p=$_COOKIE["pass"];
		
        $q=mysql_query("SELECT * FROM admin WHERE login='$l' AND  pass='$p'");
         $n=mysql_num_rows($q);  
         if($n==1)
{
	$login=1;
}

	}
	

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<style>
.center {
	width: 300px;
	padding:10px;
	border:1px;
	margin:auto;
	background:rgba(228,42,45,1.00);
	display:table;
	text-align:center;
}
td {
	padding:5px;
	text-align:center;
}

.col1{background:#2D3639;}
.col2{background:#2D3639;}
.col3{background:#2D3639;}
</style>

</head>

<body>


<div class='center'>
	<a href="tov.php?x=1>">Операции с товаром</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="admin.php?x=2">Выход</a>
</div>
 
<div class="auth">
<?php
if($login==1)
{
	echo "Успешно";
}
else
{
include "auth.php";//connect to outside file with authorization fields
}
if ($_GET[x]==1&&$_login==1)
{
	include 'prod.php';
}
?>
</div>


</body>
</html>
