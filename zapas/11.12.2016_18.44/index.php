<?php

ini_set ('error_reporting', E_ALL);
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);

require_once 'app/header.php';

?>

<div class="container">
    <div id="main_area">
        <div class="row">
            <div class="col-sm-6" id="">

                    <!--Форма для ввода текста -->
                    <form action="insert.php"  method="post">
                        <textarea name="content" rows="8" cols="20" class="form-control" placeholder="Введите какой-нибудь текст"></textarea>
                        <br>
                        <input type="submit" class="btn btn-default" value="Отправить текст">
                    </form>
                    <br>

                                        <!--Форма для загрузки файлов -->
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
                    </form>

        
            </div>
            <div class="col-sm-6">
                <table style="width:100%">
<!-- Отображаем вводимый слева текст с правой стороны экрана-->

                    <?php
                        $categories = get_categories();
                    ?>
                    <?php if(count($categories) === 0): ?>
                    <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i> Добавить контент</a></li>
                    <?php else: ?>
                        
                    <?php foreach ($categories as $category): ?>
                   
                 <tr style="height:200px"><td style="width:70%"><li><?=$category["content"]?></li></td>
                <td style="width:30%"><li><?=$category["chislo"]?></li></td></tr>
                    <?php endforeach; ?>

                    <?php endif; ?>
                    
                    <!-- Отображаем загруженный файл (.jpg) на экран-->
                <!--    <?php
                        $conn = mysqli_connect("localhost", "root", "", "illinoisdb") or die (mysqli_error ());
                        $conn->set_charset("utf8");
                        $strSQL = "SELECT * FROM illinois_img";
                        $result = mysqli_query($conn, $strSQL);
                        while ($row = mysqli_fetch_array($result)) {
                                
                            echo "<img src='uploads/".$row['image']."' width='200' alt='lorem' class='img-thumbnail' />";
                            
                        }
                    ?> -->
                </table>
            </div>

        </div>

    </div>
</div>
<?php

include_once 'app/footer.php';
?>
