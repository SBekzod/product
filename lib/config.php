<?php

// MYSQL
define('_MYSQL_NAME_', 'mit_product');
define('_MYSQL_HOST_', '45.13.132.208');
define('_MYSQL_USER_', 'root_dev');
define('_MYSQL_PASSWORD_', 'Damir2014!');


$mysql_db_name = _MYSQL_NAME_;
$mysql_host = _MYSQL_HOST_;
$mysql_user = _MYSQL_USER_;
$mysql_password = _MYSQL_PASSWORD_;

try {
  $con = new PDO("mysql:dbname=$mysql_db_name;host=$mysql_host;port=3306", $mysql_user, $mysql_password);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>