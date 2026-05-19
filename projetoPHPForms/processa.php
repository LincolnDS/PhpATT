<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Confirmação</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="container">
    <?php
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $idade = $_POST['idade'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $sexo = $_POST['sexo'] ?? '';
    $obs = $_POST['obs'] ?? '';
    if (empty($nome) || empty($email) || empty($idade) || empty($cidade) || empty($sexo)) {
        echo "<p class='erro'>Erro: Todos os campos (exceto observações) são obrigatórios!</p>";
        echo "<a href='index.php'>Voltar</a>";
    } 
    elseif (!is_numeric($idade)) {
        echo "<p class='erro'>Erro: A idade deve ser um número!</p>";
        echo "<a href='index.php'>Voltar</a>";
    } 
    else {
        echo "<h2>Dados Enviados:</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Idade:</strong> $idade anos</p>";
        echo "<p><strong>Cidade:</strong> $cidade</p>";
        echo "<p><strong>Sexo:</strong> $sexo</p>";
        echo "<p><strong>Obs:</strong> $obs</p>";
        echo "<a href='index.php'>Novo Cadastro</a>";
    }
    ?>
</div>

</body>
</html>