<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    margin: 0;
    min-height: 100vh;
    overflow: hidden;

}

.container {
    width: 350px;
    margin: 80px auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    text-align: center;
}

h1 {
    margin-bottom: 20px;
    color: #333;
}

p {
    text-align: left;
    margin: 8px 0;
}

.erro {
    color: red;
}

.btn-voltar {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #4facfe;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    transition: 0.3s;
}

.btn-voltar:hover {
    background: #007bff;
}
</style>

</head>
<body>

<div class="container">

<?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$idade = $_POST['idade'];
$estado = strtoupper($_POST['estado']);

if ($estado == "SP" && $idade > 18) {
    echo "<h1>Dados do Aluno</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>Número:</strong> $numero</p>";
    echo "<p><strong>Idade:</strong> $idade</p>";
    echo "<p><strong>Estado:</strong> $estado</p>";
} else {
    echo "<h1 class='erro'>Dados não atendem aos critérios</h1>";
}
?>

<a href="index.php" class="btn-voltar">Voltar</a>

</div>

</body>
</html>