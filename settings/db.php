<?php
include_once 'settings_db.php';

$CONNECT = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die(mysqli_error());
$CONNECT->set_charset('utf8');

