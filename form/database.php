<?php
$connect = mysqli_connect("localhost", "root", "root", "users" );
if ($connect == false) {
	echo "Ошибка подключения";
}
?>