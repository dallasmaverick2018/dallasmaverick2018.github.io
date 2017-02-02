<?php

ini_set ('error_reporting', E_ALL);
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);

require_once 'app/header.php';

?>

<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="">
<!--
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    -->
                    <!--
                    <?php
                        $categories = get_categories();
                    ?>
                    <?php if(count($categories) === 0): ?>
                    <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i> Добавить контент</a></li>
                    <?php else: ?>
                        
                    <?php foreach ($categories as $category): ?>
                    <!--<li><a href="/category.php?id=<?=$category["id"]?>"><?=$category["content"]?></a></li>-->
               <!--     <li><?=$category["content"]?></li>
                    <?php endforeach; ?>

                    <?php endif; ?>  

                    -->
                    <!--Форма для ввода текста -->
                    <form action="insert.php"  method="post">
                        <textarea name="content" rows="8" cols="60">The cat was playing in the garden.</textarea>
                        <br>
                        <input type="submit">
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
<!--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum</p>
-->
                    <?php
                        $categories = get_categories();
                    ?>
                    <?php if(count($categories) === 0): ?>
                    <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i> Добавить контент</a></li>
                    <?php else: ?>
                        
                    <?php foreach ($categories as $category): ?>
                   
                    <li><?=$category["content"]?></li>
                    <?php endforeach; ?>

                    <?php endif; ?>

            </div>

        </div>

    </div>
</div>
<?php

include_once 'app/footer.php';

?>