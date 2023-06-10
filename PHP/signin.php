<?
$hostname = "localhost";
$username = "myusername";
$password = "Abc13579";
$dbName = "accdata";
$userstable = "accdatas";
mysql_connect($hostname,$username,$password) or die("Не могу создать соединение ");

@mysql_select_db("$dbName") or die("Не могу выбрать базу данных ");

$query = "SELECT";
?>