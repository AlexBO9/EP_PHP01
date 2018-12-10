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
                <h2>Introdueïx el text a processar:</h2>
                <form action="./include/resultat.php" method="post">
                    <div>
                        <textarea name="text" rows="10" cols="80" autofocus></textarea>
                    </div>
                    <div id="botons">
                    <input type="submit" value="Envia"/>
                    </div>
                </form>
            </main>
        </div>
    </body>
</html>
