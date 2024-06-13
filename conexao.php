<?php 
    require_once('bd/database.php');
    //$diretorio_db = __DIR__."/bd/lojapedalradical.db";
    $db = Database::adqquirir_db();
    if($db){
      $query = "CREATE TABLE IF NOT EXISTS usuario (id INTEGER PRIMARY KEY, nome TEXT, email TEXT, senha TEXT)";
      $db->exec($query);
    }else{
      echo "Desculpe, não foi possível conectar ao banco de dados SQLite 'agenda'!";
    }

?>