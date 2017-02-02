<?php
	$link = new mysqli('localhost','root','','illinoisdb');
	$link->set_charset("utf8");

	if (mysqli_connect_errno())
	{
		echo 'Ошибка в подключении к БД ('.mysqli_connect_errno().'): '.mysqli_connect_error();
		exit();
	}
?>