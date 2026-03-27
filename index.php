<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro de Aluno</title>

<style>


body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    min-height: 100vh;
    margin: 0;
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

label {
    display: block;
    text-align: left;
    margin-top: 10px;
    font-weight: bold;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 8px;
    border: 1px solid #ccc;
    transition: 0.3s;
}

input:focus {
    border-color: #4facfe;
    outline: none;
}

button {
    width: 100%;
    margin-top: 20px;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background: #4facfe;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #007bff;
}
</style>

</head>
<body>

<div class="container">
    <h1>Cadastro de Aluno</h1>

    <form action="processa.php" method="POST">
        <label>Nome do Aluno</label>
        <input type="text" name="nome" required>

        <label>Endereço</label>
        <input type="text" name="endereco" required>

        <label>Número da Residência</label>
        <input type="number" name="numero" required>

        <label>Idade</label>
        <input type="number" name="idade" required>

        <label>Estado (UF)</label>
        <input type="text" name="estado" maxlength="2" required>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>