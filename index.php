<?php 
session_start();
?>

<!DOCTYPE html>

<html lang="pt">
 

    <meta charset="utf-8">
    <title>Revisão PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

    <body>
        <h1>Formulário test</h1>
        
        <?php
            include_once('config/formMessage.php')
           //echo $message;
        ?>

        <form action="config/formAction.php" method="get">
        <p>Your name: <input type="text" name="inputName"  /></p>
        <p>Your age: <input type="text" name="inputIdade" required /></p>
        <p><input type='submit' value="Enviar dados" /></p>

        </form> 
    </body>


</html>