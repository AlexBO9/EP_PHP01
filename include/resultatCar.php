<?php
$_POST['car'] != "" ? $car = $_POST['car'] : $car = 'a';
$_POST['text'] != "" ? $text = $_POST['text'] : $text = "Buit";
$caracters = explode(",", $car);
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
                    <h2>Caracters y Text Processat 1:</h2>
                    <div>
                        <?php
                        for ($i = 0; $i < strlen($text); $i++) {
                            for ($j = 0; $j < count($caracters); $j++) {
                                if (!strcmp($text[$i], $caracters[$j])) {
                                    if (!isset($cont[$j])) {
                                        $cont[] = 1;
                                    } else {
                                        $cont[$j] ++;
                                    }
                                }
                            }
                        }
                        for ($i = 0; $i < count($caracters); $i++) {
                            echo '<p>';
                            echo $caracters[$i] . ": " . $cont[$i];
                            echo '</p>';
                        }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
