
<?php

 require_once('bd/database.php');
 $db = Database::adqquirir_db();
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
 $senha = md5($_POST['senha']);

if($db){
  $stmt = $db->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
  $stmt->execute([ ':nome' => $nome,':email' => $email, ':senha' => $senha]);

  $stmt = $db->prepare("SELECT * FROM usuario where email LIKE :email");
  $stmt->execute([':email' => $email]);
  $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if($resultados){
    echo"<script>alert('Cadastrado com sucesso.');</script>";
  }else{
     echo"<script>alert('Não foi possível cadastrar.');</script>";
  }
  
 }else{
   echo "Desculpe, não foi possível conectar ao banco de dados SQLite 'pedal'!";
 }


?>