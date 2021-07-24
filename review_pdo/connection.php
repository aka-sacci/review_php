<?php

declare(strict_types=1);

$pdo = null;

try{
    $pdo = new PDO('mysql:host=localhost;dbname=bd_review_php', 'root', ''); //PARAMETROS DE CONEXÃO
}

catch (Exception $e){
echo $e->getCode() . ': ' . $e->getMessage();
die();

}

return $pdo;
?>