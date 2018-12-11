<?php
$_POST['text'] != "" ? $text = $_POST['text'] : $text = "El camp estaba buit";
$paraules = explode(" ", $text);
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
                    <h2>Text Processat 1:</h2>
                    <div>
                        <?php
                        for ($i = 0; $i < strlen($text); $i++) {
                            if ($i % 2 != 0) {
                                echo '<span class="parell">' . $text[$i] . '</span>';
                            } else {
                                echo '<span class="imparell">' . $text[$i] . '</span>';
                            }
                        }
                        ?>
                    </div>
                </div>

                <!--Exercici 2-->
                <div>
                    <h2>Text Processat 2:</h2>
                    <div>
                        <?php
                        for ($i = 1; $i < strlen($text); $i += 2) {
                            echo '<span class="parell">' . $text[$i] . '</span>';
                        }
                        for ($i = 0; $i < strlen($text); $i += 2) {
                            echo '<span class="imparell">' . $text[$i] . '</span>';
                        }
                        ?>
                    </div>
                </div>

                <!--Exercici 3-->
                <div>
                    <h2>Text Processat 3:</h2>
                    <div>
                        <?php
                        for ($i = 0; $i < count($paraules); $i++) {
                            echo "<p>(" . str_pad($paraules[$i], strlen($paraules[$i]) * 3, "#", STR_PAD_BOTH) . ")</p>";
                        }
                        ?>
                    </div>
                </div>

                <!--Exercici 4-->
                <div>
                    <h2>Text Processat 4:</h2>
                    <div>
                        <?php
                        for ($i = 0; $i < strlen($text); $i++) {
                            echo "<p>";
                            for ($j = 0; $j <= $i; $j++) {
                                if (!strcmp($text[$j], " ")) {
                                    echo "_";
                                } else {
                                    echo $text[$j];
                                }
                            }
                            echo "</p>";
                        }
                        ?>
                    </div>
                </div>

                <!--Exercici 5-->
                <div>
                    <h2>Text Processat 5:</h2>
                    <div>
                        <?php
                        for ($i = 0; $i < count($paraules); $i++) {
                            if (strlen($paraules[$i]) < 5) {
                                $array1[] = $paraules[$i];
                            } elseif (strlen($paraules[$i]) >= 5 && strlen($paraules[$i]) <= 10) {
                                $array2[] = $paraules[$i];
                            } else {
                                $array3[] = $paraules[$i];
                            }
                        }
                        if (isset($array1)) {
                            asort($array1);
                            echo "<p>";
                            echo "<strong> Array de paraules amb longitud menor a 5: </strong>";
                            foreach ($array1 as $valor) {
                                echo $valor . " ";
                            }
                            echo "</p>";
                        }
                        if (isset($array2)) {
                            asort($array2);
                            echo "<p>";
                            echo "<strong>Array de paraules amb longitud major o igual a 5 i menor o igual a 10: </strong>";
                            foreach ($array2 as $valor) {
                                echo $valor . " ";
                            }
                            echo "</p>";
                        }
                        if (isset($array3)) {
                            asort($array3);
                            echo "<p>";
                            echo "<strong>Array de paraules amb longitud major a 10: </strong>";
                            foreach ($array3 as $valor) {
                                echo $valor . " ";
                            }
                            echo "</p>";
                        }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
