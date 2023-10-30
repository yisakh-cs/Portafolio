<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_tienda = "localhost";
$database_tienda = "tienda";
$username_tienda = "root";
$password_tienda = "";
$tienda = mysqli_connect($hostname_tienda, $username_tienda, $password_tienda, $database_tienda) or trigger_error(mysqli_error(),E_USER_ERROR);
?>
