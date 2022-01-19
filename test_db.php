<?php

$DB_HOST="mysql_host";
$DB_USER="admin";
$DB_PASSWD="dZsuKoZqwsDFzZz";

if (!$link = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWD)) {
    echo 'Cant connect to mysql';
    exit;
}

if (!mysql_select_db('mysql_dbname', $link)) {
    echo 'Can t select database';
    exit;
}

$sql    = 'SELECT name FROM users';
$result = mysql_query($sql, $link);

if (!$result) {
    echo 'MySQL error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['name'];
}

mysql_free_result($result);

?>
