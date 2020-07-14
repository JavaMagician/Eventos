<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELA DO EVENTO REGISTRADO</title>
</head>
<body>
    <h1>Evento registrado com sucesso</h1>
    <br>
    <h1>Seu evento:</h1>
    <br>
<?php

/**
 * @author Edgar D. Santos
 * Inicializa dados da sessão
 * @param array
 * @return bool

 */
session_start();

/**
     * Uma matriz associativa contendo variáveis ​​de sessão disponíveis 
     * para o script atual. Consulte a documentação das funções da 
     * sessão para obter mais informações sobre como isso é usado.

     */
$t = $_SESSION['tipo'];
$c = $_SESSION['convidados'];
$co = $_SESSION['comida'];
$f = $_SESSION['funcionarios'];
$m = $_SESSION['musica'];
$d = $_SESSION['design'];
$tr = $_SESSION['traje'];
$h = $_SESSION['horario'];
$l = $_SESSION['lugar'];

echo "TIPO DE EVENTO: $t";
echo " <br />";
echo "NÚMERO DE CONVIDADOS: $c";
echo " <br />";
echo "TIPO DE COMIDA: $co";
echo " <br />";
echo "NÚMERO DE FUNCIONÁRIOS: $f";
echo " <br />";
echo "TIPO DE MUSICA: $m";
echo " <br />";
echo "TIPO DE DESIGN: $d";
echo " <br />";
echo "TIPO DE TRAJE: $tr";
echo " <br />";
echo "HORÁRIO DO EVENTO: $h";
echo " <br />";
echo "LOCAL DO EVENTO: $l";

?>
</body>
</html>