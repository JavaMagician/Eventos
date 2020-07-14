<?php
/**
 * @author Edgar D. Santos
 * Função que chama outro arquivo .php
 * @param conexao.php
 */
include_once('conexao.php');
/**
 * Obtém uma variável externa específica por nome e, opcionalmente, a filtra.
 * @param string $nome_variavel — Nome de uma variável a ser obtida.
 * @return mixed
*/
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$dados = "INSERT INTO eventobd (nome, telefone, email, senha) VALUES ('$nome', '$telefone', '$email', '$senha')";

/**
 * Executa uma consulta no banco de dados
 * @param mysql $variavel
 * @return mysql bool

 */
$Lista = mysqli_query($conexao, $dados);

/**
 * Retorna o ID gerado automaticamente usado na última consulta
 * @param mysql $variavel
 * @return int ou string

 */
if(mysqli_insert_id($conexao)){
    /**
     * Enviar um cabeçalho HTTP bruto
     * @param string
     * @return void

     */
    header("Location: Login_usuario.php");
} else{
    header("Location: Cadastro_usuario.php");
}


?>