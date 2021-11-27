<?php
$host = "localhost";
$user = 'root';
$pass = '';
$db = 'article';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!isset($conn)) {
  echo 'not connected';
}
