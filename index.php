<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ExercicisPHP</title>
        <link rel="stylesheet" type="text/css" href="./css/estils.css"/>
    </head>
    <body>
        <div id="wrapper">
            <main>
                <div>
                    <h2>Introdueïx el text a processar:</h2>
                    <!--Form per a les activitats de la 1 a la 5 de text-->
                    <form action="./include/resultat.php" method="post">
                        <div>
                            <textarea name="text" rows="10" cols="80" autofocus></textarea>
                        </div>
                        <div id="botons">
                            <input type="submit" value="Envia"/>
                        </div>
                    </form>
                </div>

                <div>
                    <h2>Introdueïx el nombre a processar:</h2>
                    <!--Form per a les activitats de la 1 a la 2 de imatges-->
                    <form action="./include/resultatImg.php" method="post">
                        <div>
                            <input type="number" name="num" min="0" max="10"/>
                        </div>
                        <div id="botons">
                            <input type="submit" value="Envia"/>
                        </div>
                    </form>
                </div>

                <div>
                    <h2>Introdueïx el nombre i text a processar:</h2>
                    <!--Form per a la activitat de l'ona-->
                    <form action="./include/resultatOna.php" method="post">
                        <div>
                            <input type="number" name="num" min="0" max="10"/>
                        </div>
                        <div>
                            <textarea name="text" rows="10" cols="80"></textarea>
                        </div>
                        <div id="botons">
                            <input type="submit" value="Envia"/>
                        </div>
                    </form>
                </div>
                <div>
                    <h2>Introdueïx el caracters i text a processar:</h2>
                    <!--Form per a la activitat de text i caracters-->
                    <form action="./include/resultatCar.php" method="post">
                        <div>
                            <input type="text" name="car"/>
                        </div>
                        <div>
                            <textarea name="text" rows="10" cols="80"></textarea>
                        </div>
                        <div id="botons">
                            <input type="submit" value="Envia"/>
                        </div>
                    </form>
                </div>

                <div>
                    <h2>Introdueïx el caracters i text a processar:</h2>
                    <!--Estudiants notes-->
                    <div>
                        <?php
                        include './include/dades.php';
                        foreach ($alumnosNotas as $key => $valor) {
                            echo '<p>';
                            echo $key.": ";
                            foreach ($valor as $asignatura => $notes) {
                                echo $asignatura.'(';
                                echo $notes[0];
                                for ($i = 1; $i < count($notes); $i++) {
                                    echo ','.$notes[$i];
                                }
                                echo ')';
                            }
                            echo '</p>';
                        }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
