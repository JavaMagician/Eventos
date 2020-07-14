<?php
/**
 * @author Edgar D. Santos
 * Inicializa dados da sessão
 * @param array
 * @return bool

 */
session_start();

/**
 * Função que chama outro arquivo .php
 * @param conexao.php
 */
include_once('conexao.php');

/**
 * Escapa caracteres especiais em uma sequência para uso em uma 
 * instrução SQL, levando em consideração o conjunto de caracteres atual da conexão
 * @param mysql $variavel
 * @return string

 */
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);

$query = "SELECT id, nome, telefone, email from eventobd where email = '{$email}' and senha = '{$senha}'";

/**
 * Executa uma consulta no banco de dados
 * @param mysql $variavel
 * @return mysql bool

 */
$teste = mysqli_query($conexao, $query);
/**
 * Obtém o número de linhas em um resultado
 * @param mysqli_result $varivavel

 */
$linha = mysqli_num_rows($teste);

if($linha == 1){
    /**
     * Uma matriz associativa contendo variáveis ​​de sessão disponíveis 
     * para o script atual. Consulte a documentação das funções da 
     * sessão para obter mais informações sobre como isso é usado.

     */
    $_SESSION['nome'] = $nome;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['email'] = $email;
    
    /**
     * Enviar um cabeçalho HTTP bruto
     * @param string
     * @return void

     */
    header('Location: TelaEventos.php');
    
}else{
    header('Location: Cadastro_usuario.php');
}




?>