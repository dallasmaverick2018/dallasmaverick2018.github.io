
<?php     ////// Код взят из http://www.w3schools.com/php/php_file_upload.asp
$target_dir = "uploads/";     ////// Также пользовался сайтом http://www.codingcage.com/2014/12/file-upload-and-view-with-php-and-mysql.html
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//////////////////////////////////////////////////////////////////////////////////////////
        //Пытаемся загрузить путь файла в БД

// Соединение с сервером БД
    $conn = mysqli_connect("localhost", "root", "", "illinoisdb") or die (mysqli_error ());
    $conn->set_charset("utf8");

//get all submitted data from the form
$image = $_FILES['fileToUpload']['name'];

    // Выбор БД
    //mysqli_select_db($conn, "illinoisdb") or die(mysqli_error());

    // Построение SQL-оператора<!--VALUES ('" . $_POST["fileToUpload"] . "')";-->
//$city = $target_file; //Экранируем специальные символы в строке для использования в SQL - разницы один фиг нет
//$city = mysqli_real_escape_string($conn, $city);  
    $strSQL = "INSERT INTO illinois_img (image) VALUES ('$image')";



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


//////////////////////////////////////////////////////////////////////////////////      


?>
