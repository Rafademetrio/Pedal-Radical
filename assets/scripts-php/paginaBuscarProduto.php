<?php
$pathDB = $_POST['path-db'];
require_once ($pathDB);
$db = Database::adqquirir_db();


$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$preco = isset($_POST['preco']) ? $_POST['preco'] : "";
$desconto = isset($_POST['desconto']) ? $_POST['desconto'] : "";
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : "";
$estoque = isset($_POST['estoque']) ? $_POST['estoque'] : "";
$genero = isset($_POST['genero']) ? $_POST['genero'] : "";
$idade = isset($_POST['idade']) ? $_POST['idade'] : "";
$cor = isset($_POST['cor']) ? $_POST['cor'] : "";


echo "<br><br><br>";

$query = "SELECT * FROM produto WHERE 1=1";

if (!empty($nome)) {
    $query .= " AND nome LIKE '$nome'";
}

if (!empty($preco) && is_numeric($preco)) {
    $query .= " AND preco = $preco";
}

if (!empty($desconto) && is_numeric($desconto)) {
    $query .= " AND desconto = $desconto";
}

if (!empty($descricao)) {
    $query .= " AND descricao LIKE '$descricao'";
}

if (!empty($estoque) && is_numeric($estoque)) {
    $query .= " AND estoque = $estoque";
}

if (!empty($genero)) {
    $query .= " AND genero LIKE '$genero'";
}

if (!empty($idade) && is_numeric($idade)) {
    $query .= " AND idade = $idade";
}



echo $query . "<br>";

if ($db) {
    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }



}



?>

<h2>Resultados da Pesquisa</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
    </tr>
    <?php foreach ($resultados as $produto): ?>
        <tr>
            <td><?php echo htmlspecialchars($produto['id']); ?></td>
            <td><?php echo htmlspecialchars($produto['nome']); ?></td>
            <td><button class="delete" value="<?php echo htmlspecialchars($produto['id']); ?>">deletar <?php echo htmlspecialchars($produto['id']); ?> </button></td>
        </tr>
    <?php endforeach; ?>
</table>

<script>
    var botoesDelete = document.querySelectorAll(".delete")
    
    botoesDelete.forEach(function(botao){
        botao.addEventListener('click', function(){
            var id = this.value;
            console.log(id)
        })
    })
</script>