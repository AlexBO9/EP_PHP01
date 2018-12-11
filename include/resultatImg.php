<?php
$_POST['num'] != 0 ? $num = $_POST['num'] : $num = 1;
$img = '<img src="../img/img.png" alt="img"/>';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ExercicisPHP</title>
        <link rel="stylesheet" type="text/css" href="../css/estils.css"/>
    </head>
    <body>
        <div id="wrapper">
            <main>
                <!--Exercici 1-->
                <div>
                    <h2>Num Processat 1:</h2>
                    <div>
                        <?php
                        for ($i = 0; $i <= $num; $i++) {
                            echo '<p>';
                            for ($j = 0; $j < $i; $j++) {
                                echo $img;
                            }
                            echo '</p>';
                        }
                        ?>
                    </div>
                </div>

                <!--Exercici 2-->
                <div>
                    <h2>Num Processat 2:</h2>
                    <div>
                        <?php
                        for($i = 0; $i < $num; $i++) {
                            echo '<div class="quadrat">';
                            for ($j = 0; $j <= $i; $j++) {
                                echo '<p>';
                                for ($k = 0; $k <= $i; $k++) {
                                    echo $img;
                                }
                                echo '</p>';
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
