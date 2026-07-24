<?php
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'konarkco_data';
$db_pass = getenv('DB_PASS') ?: '';
$db_name = getenv('DB_NAME') ?: 'konarkco_data';

$con = @mysql_connect($db_host, $db_user, $db_pass);
if ($con) {
    $db = @mysql_select_db($db_name);
}
?>