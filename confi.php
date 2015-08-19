<?php
//$conn = mysql_connect("127.3.9.130", "adminiWrVJlR", "7WPcJIjiiwGd");
//mysql_select_db('itb_notification', $conn);

$conn = mysql_connect("127.5.123.130", "admin1qC8LT2", "fkV2843jer3d");
mysql_select_db('tuts_rest', $conn);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
printf("MySQL server version: %s\n", mysql_get_server_info());

?>