<?php
 if( !session_id() ) {
  session_start();
}
 require_once('bd/database.php');
 $db = Database::adqquirir_db();
 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
 $senha = md5($_POST['senha']);

 

 if($db){
  $stmt = $db->prepare("SELECT * FROM usuario where email LIKE :email");
  $stmt->execute([':email' => $email]);
  $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if ($resultados) {
    foreach ($resultados as $row) {
      if ($row['senha'] == $senha){
        $_SESSION['nome'] = $row['nome'];
        header("Location: ../../index.php");
        echo "<div class='alert alert-success' role='alert'>";
        echo  htmlspecialchars($row['nome']) . " Logado com sucesso";
        echo  "<a href='indexNovo.php'>ok</a>";
        echo "</div>";

      }else{
        
        echo"<script>alert('Senha errada, tente novamente.');</script>";
        
      }

    }
    
  } else {
    
    echo"<script>alert('Nenhum usuário encontrado.');</script>";
  }

 }else{
     echo "<script>alert('Desculpe, não foi possível conectar ao banco de dados SQLite pedal!');</script>";
 }


?>