<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
</head>
<body>
<?php
session_start();

echo $_SESSION['email']
?>
<div id="area">
    <form id="login" method="POST" action="mostrarEvento.php">
        <fieldset>
        <legend>Cadastrar Eventos</legend>
        <label>Tipo de evento: </label>
        <input type="text" name="tipo" placeholder="Casamento,Aniversário,Reuniões"><br>
        <label></label><br>
        <label>Número de convidados: </label>
        <input type="text" name="convidados" placeholder="No mínimo 2 convidados"><br>
        <label></label><br>
        <label>Tipo de comida: </label>
        <input type="text" name="comida" placeholder="No mínimo 1 tipo de comida"><br>
        <label></label><br>
        <label>Quantidade de funcionários: </label>
        <input type="text" name="funcionarios" placeholder="Não é obrigatório"><br>
        <label></label><br>
        <label>Música do evento: </label>
        <input type="text" name="musica" placeholder="Não é obrigatório"><br>
        <label></label><br>
        <label>Design do evento: </label>
        <input type="text" name="design" placeholder="Não é obrigatório"><br>
        <label></label><br>
        <label>Traje dos convidados: </label>
        <input type="text" name="traje" placeholder="Não é obrigatório"><br>
        <label></label><br>
        <label>Horário de início e fim do evento: </label>
        <input type="text" name="horario" placeholder="00:00 até 00:00"><br>
        <label></label><br>
        <label>Local do evento: </label>
        <input type="text" name="lugar" placeholder="Informe seu local de evento"><br>
        <label></label><br>
        <input class="botao" type="submit" value="Cadastrar Evento">
        </fieldset>
    </form>
</div>
</body>
</html>
