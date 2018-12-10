<?php
$_POST['text'] != "" ? $text = $_POST['text'] : $text = "El camp estaba buit";
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
                <div>
                    <h2>Text Procesat 1:</h2>
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

                <div>
                    <h2>Text Procesat 2:</h2>
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
                <div>
                    <h2>Text Procesat 3:</h2>
                    <div>
                        <?php
                        $paraules = explode(" ", $text);
                        for ($i = 0; $i < count($paraules); $i++) {
                            echo "<p>(".str_pad($paraules[$i], strlen($paraules[$i])*3, "#", STR_PAD_BOTH).")</p>";
                        }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
