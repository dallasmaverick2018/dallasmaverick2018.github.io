
	<?php

	// Соединение с сервером БД
	$conn = mysqli_connect("localhost", "root", "") or die (mysqli_error ());
	$conn->set_charset("utf8");

	// Выбор БД
	mysqli_select_db($conn, "illinoisdb") or die(mysqli_error());

	// Построение SQL-оператора

	$strSQL = "INSERT INTO illinois_table (content)
VALUES ('" . $_POST["content"] . "')";



	// SQL-оператор выполняется
	if (mysqli_query($conn, $strSQL)) {
    //echo "New record created successfully";
    header('Location: /illinois/');
} else {
    echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
}

	// Закрытие соединения

    //mysqli_error();
	mysqli_close($conn);
	?>