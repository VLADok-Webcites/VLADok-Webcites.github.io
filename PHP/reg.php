<?
$hostname = "localhost";
$username = "myusername";
$password = "Abc13579";
$dbName = "accdata";
$userstable = "accdatas";
MYSQL_CONNECT($hostname,$username,$password) OR DIE("Не могу создать соединение ");

@mysql_select_db("$dbName") or die("Не могу выбрать базу данных ");

$query = "INSERT INTO $userstable VALUES('$name','$email', '$password')";

$result = MYSQL_QUERY($query);
MYSQL_CLOSE();
PRINT "Информация о вас занесена в базу данных.";
?>