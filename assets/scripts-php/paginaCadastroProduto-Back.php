<?php
$pathDB = $_POST['path-db'];
require_once ($pathDB);
$db = Database::adqquirir_db();


$nome = $_POST['nome'];
$preco = $_POST['preco'];
$desconto = $_POST['desconto'];
$descricao = $_POST['descricao'];
$estoque = $_POST['estoque'];
$genero = $_POST['genero'];
$idade = $_POST['idade'];
$cor = $_POST['cor'];


echo "<br><br><br>";



if($db){
    try{
        $query = "INSERT INTO produto (nome, preco, desconto, descricao, estoque, genero, idade, cor) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([ $nome, $preco, $desconto, $descricao, $estoque, $genero, $idade,$cor]);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    echo "$nome, incluido com sucesso.";

}



?>