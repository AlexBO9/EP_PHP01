<?php
$_POST['num'] != 0 ? $num = $_POST['num'] : $num = 1;
$_POST['text'] != "" ? $text = $_POST['text'] : $text = "Buit"
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
                    <h2>Num y Text Processat 1:</h2>
                    <div id="ona">
                        <p>(</p>
                        <?php
                        for ($i = 0; $i < $num; $i++) {
                            for ($j = 0; $j < strlen($text); $j++) {
                                echo '<p>';
                                for ($k = 0; $k <= $j; $k++) {
                                    echo $text[$k];
                                }
                                if ($j == strlen($text)-1) {
                                    echo ')';
                                } else {
                                    echo '\\';
                                }
                                echo '</p>';
                            }
                            for ($j = strlen($text) - 1; $j > 0; $j--) {
                                echo '<p>';
                                for ($k = 0; $k < $j; $k++) {
                                    echo $text[$k];
                                }
                                echo '/';
                                echo '</p>';
                            }
                            echo '(';
                        }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
