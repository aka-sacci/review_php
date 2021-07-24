<?php
declare(strict_types=1);

class Product{

    private $connection;

    public function __construct()
    {
        $pdo = require 'connection.php';    
        $this->connection = $pdo;
    }

   public function listProducts(){
    
    $sql = "select * from produtos"; //salva a querty numa variavel
    $registros = null;

    foreach ($this->connection->query($sql) as $key => $value)//executa a querty, pegando cara elemento retornado e jogando na tela
    {
        $registros .= 'id: ' . $value['id'] . '<br> Descrição: ' . $value['desc'] . ' <br>';
    }
    
    return $registros;

    }

    public function insertProducts(string $desc){

        $sql = 'INSERT INTO produtos (`desc`) VALUES (?)'; // o '?' funciona como um provável valor, binding context da query php
        $prepare = $this->connection->prepare($sql); //prepara o $sql
        $prepare->bindParam(1, $desc); //substitui os '?' da querty por valores especificados. 1 é referente ao primeiro '?'
        $prepare->execute(); //executa o comando em sí
        return (bool)$prepare->rowCount(); //retorna de a inserção foi um sucesso ou não

    }

    public function updateProducts(string $desc, string $id){
       
        $sql = 'update produtos set `desc` = :desc where id = :id'; // o ':' funciona como um provável valor, binding context da query php
        $prepare = $this->connection->prepare($sql); //prepara o $sql
        $prepare->bindParam(':desc', $desc); 
        $prepare->bindParam(':id', $id);//substitui os ':' da querty por valores especificados. melhor do que usar '?'
        $prepare->execute(); //executa o comando em sí
        return (bool)$prepare->rowCount(); 

    }

    public function deleteProducts(string $id){
        
        $sql = 'delete from produtos where id = :id'; // o ':' funciona como um provável valor, binding context da query php
        $prepare = $this->connection->prepare($sql); //prepara o $sql
        $prepare->bindParam(':id', $id);//substitui os ':' da querty por valores especificados. melhor do que usar '?'
        $prepare->execute(); //executa o comando em sí
        return (bool)$prepare->rowCount();
    }


}

//$myProduct = new Product();
//echo $myProduct->listProducts();
?>