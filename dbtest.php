<html>
<head><title>Addition php</title></head>
<body>

<?php


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'hu199361');
define('DB_DATABASENAME', 'Ticket');
define('DB_TABLENAME', 'samples');

$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());
mysql_select_db(DB_DATABASENAME, $conn);
$sql = sprintf("select count(*) from %s", DB_TABLENAME);
echo $sql;
$result = mysql_query($sql, $conn);
if ($result){
    $count = mysql_fetch_row($result);
}
else
{
    die("query failed");
}
echo "表中有$count[0] 条记录<br />";

?>

</body>
</html>