<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container">
    <h2>Cadastro</h2>
    <form action="processa.php" method="POST">
        <input type="text" name="nome" placeholder="Nome Completo">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="idade" placeholder="Idade">
        <input type="text" name="cidade" placeholder="Cidade">
        <select name="sexo">
            <option value="">Selecione o Sexo</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select>
        <textarea name="obs" placeholder="Observações" rows="3"></textarea>
        <button type="submit">Enviar</button>
    </form>
</div>
</body>
</html>