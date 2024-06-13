<?php 
$diretorio_db = __DIR__."/lojapedalradical.db";

class Database
{
    private static PDO $database;
    private function __construct()
    {

    }

    static function adqquirir_db()
    {
        global $diretorio_db;
        if(!isset(self::$databse)){
            try{
                self::$database = new PDO("sqlite:". $diretorio_db);
                $queryUsuario = "CREATE TABLE IF NOT EXISTS usuario (id INTEGER PRIMARY KEY, nome TEXT, email TEXT, senha TEXT)";
                $queryProduto = "CREATE TABLE IF NOT EXISTS produto (id INTEGER PRIMARY KEY, nome TEXT, preco INTEGER, desconto INTEGER, descricao TEXT, estoque INTEGER, genero TEXT, idade TEXT, cor TEXT)";
                self::$database->exec($queryUsuario);
                self::$database->exec($queryProduto);
            }catch(PDOException $e){
                $error = $e->getCode();
                var_dump($error);
                exit();
            }

        }

        return self::$database;
    }

 
    
}

?>