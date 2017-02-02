<?php

ini_set ('error_reporting', E_ALL);
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);

require_once 'app/header.php';

?>

<div class="container">
    <div id="main_area">
        <div class="row">
            <div class="col-md-6" id="">

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

            <div class="col-md-6">
                <div class="page-header">
                    <h2>Все записи:</h2>
                </div>
                <?php
                    $categories = get_categories();
                ?>
                <?php foreach ($categories as $category): ?>
                <div class="row">
                    <!--<div class="col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="<?=$post['image']?>" alt="">
                        </a>
                    </div>-->
                    <div class="col-md-12">
                        <!--<h4><a href="#"><?=$post['title']?></a></h4>-->
                        <p>
                          <?=htmlspecialchars($category['content'])?>
                        </p>
                        <p><a class="btn btn-info btn-sm" href="delete.php?id=<?=$category['id']?>">Удалить полностью</a></p>
                        <br/>
                        <ul class="list-inline">
                            <li><i class="glyphicon glyphicon-list"></i> <a href="#">Название категории</a> | </li>
                            <li><i class="glyphicon glyphicon-calendar"></i> <?=$category["chislo"]?><!--14 июля 2016 21:00-->
                        </ul>
                    </div>
                </div>
            <hr>
            <?php endforeach; ?>    
            </div>
        </div>

    </div>
</div>
<?php

include_once 'app/footer.php';
?>
