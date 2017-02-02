
	<?php
if(isset($_GET['id'])){
	// Соединение с сервером БД
	$conn = mysqli_connect("localhost", "root", "") or die (mysqli_error ());
	$conn->set_charset("utf8");

	// Выбор БД
	mysqli_select_db($conn, "illinoisdb") or die(mysqli_error());

$id = mysqli_real_escape_string($conn, $_GET['id']);
	$strSQL = "DELETE FROM illinois_table WHERE id = $id";
	


	// SQL-оператор выполняется
	if (mysqli_query($conn, $strSQL)) {
    header('Location: /illinois/');
} else {
    echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
}
	mysqli_close($conn);
}

//if(isset($_GET['id']))
//{   
    //$id = htmlentities($_GET['id']);
    //echo "<h2>Удалить модель?</h2>
       // <form method='POST'>
     //   <input type='hidden' name='id' value='$id' />
    //    <input type='submit' value='Удалить'>
    //    </form>";
//}

	?>