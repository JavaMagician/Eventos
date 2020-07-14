<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "eventos";

/**
 * @author Edgar D. Santos
 * Abra uma nova conexão com o servidor MySQL Alias ​​do mysqli :: __ construct
 * @param string
 * @return mysql bool

 */
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("ERRO ao tentar conectar o banco");

?>