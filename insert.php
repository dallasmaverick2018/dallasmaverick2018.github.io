
	<?php

	// Соединение с сервером БД
	$conn = mysqli_connect("localhost", "root", "") or die (mysqli_error ());
	$conn->set_charset("utf8");

	// Выбор БД
	mysqli_select_db($conn, "illinoisdb") or die(mysqli_error());

	// Построение SQL-оператора
//date_default_timezone_set('Europe/Moscow');  /////  попытка вставить в БД время по Москве
//$today2 = date("Y-m-d H:i:s");               /////  но без этих строк тоже работает - в БД значение	

	$strSQL = "INSERT INTO illinois_table (content) VALUES ('" . $_POST["content"] . "')";
	
 //$strSQL2 = "INSERT INTO illinois_table (chislo) VALUES ('$today2')"; /// по умолчанию уже выставил в поле chislo


	// SQL-оператор выполняется
	if (mysqli_query($conn, $strSQL)) {
    //echo "New record created successfully";
    header('Location: /illinois/');
} else {
    echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
}


	// SQL-оператор выполняется
//	if (mysqli_query($conn, $strSQL2)) {
    //echo "New record created successfully";
//    header('Location: /illinois/');
//} else {
//    echo "Error: " . $strSQL2 . "<br>" . mysqli_error($conn);
//}

	// Закрытие соединения

    //mysqli_error();
	mysqli_close($conn);
	?>