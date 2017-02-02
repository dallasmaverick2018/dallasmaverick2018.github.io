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
                   
                <tr style="height:200px">
                    <td style="width:70%"><li><a href="/app/include/functions.php?module=news&action=delete&id=<?php echo $row['id']; ?>">УДАЛИТЬ </a><?=$category["content"]?></li></td>
                    <td style="width:30%"><li><?=$category["chislo"]?></li></td>
                </tr>
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