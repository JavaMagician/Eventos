<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>EVENTOS</title>
</head>
<body>
<div id="area">
    <form id="cadastro" method="POST" action="Cadastro.php">
    <fieldset>
    <legend>Eventos</legend>
        <label>Nome: </label><br>
        <input type="text" name="nome" placeholder="Digite seu nome completo"><br>
        <label>Telefone: </label><br>
        <input type="tel" name="telefone" placeholder="(??) ????-????"><br>
        <label>Email: </label><br>
        <input type="email" name="email" placeholder="????@????.???"><br>
        <label>Senha: </label><br>
        <input type="password" name="senha" placeholder="Digite uma senha"><br>
        
        <input class="botao" type="submit" value="Cadastrar">
    </form>

    <form method="POST" action="Login_usuario.php"><br>
        <input class="botao" type="submit" value="Login">
    </form>

    </fieldset>   
</div>
</body>
</html>