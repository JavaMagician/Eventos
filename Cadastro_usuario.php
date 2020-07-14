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
        <input type="text" name="nome" placeholder="Digite seu nome completo"
        pattern="[a-z\s]+$" required="required"><br>
        <label>Telefone: </label><br>
        <input type="tel" name="telefone" placeholder="(??) ????-????" 
        required="required"
        maxlength="15" 
        pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"><br>
        <label>Email: </label><br>
        <input type="email" name="email" placeholder="????@????.???" 
        required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br>
        <label>Senha: </label><br>
        <input type="password" name="senha" placeholder="Digite uma senha"
        maxlength="15" minlength="8" required="required" pattern="[A-Za-z0-9]{8,15}"><br>
        <label>Senha de no minimo 8 caracteres e no máximo 15.
        </label><br><br>
        <input class="botao" type="submit" value="Cadastrar">
    </form>

    <form method="POST" action="Login_usuario.php"><br>
        <input class="botao" type="submit" value="Login">
    </form>

    </fieldset>   
</div>
</body>
</html>
