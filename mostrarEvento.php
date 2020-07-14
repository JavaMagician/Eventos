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
 * Obtém uma variável externa específica por nome e, opcionalmente, a filtra.
 * @param string $nome_variavel — Nome de uma variável a ser obtida.
 * @return mixed
*/
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$convidados = filter_input(INPUT_POST, 'convidados', FILTER_SANITIZE_STRING);
$comida = filter_input(INPUT_POST, 'comida', FILTER_SANITIZE_STRING);
$funcionarios = filter_input(INPUT_POST, 'funcionarios', FILTER_SANITIZE_STRING);
$musica = filter_input(INPUT_POST, 'musica', FILTER_SANITIZE_STRING);
$design = filter_input(INPUT_POST, 'design', FILTER_SANITIZE_STRING);
$traje = filter_input(INPUT_POST, 'traje', FILTER_SANITIZE_STRING);
$horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);
$lugar = filter_input(INPUT_POST, 'lugar', FILTER_SANITIZE_STRING);

$dados = "INSERT INTO eventt (tipo, convidados, comida, 
funcionarios, musica, design, traje, horario, lugar) VALUES ('$tipo', 
'$convidados', '$comida', '$funcionarios', '$musica', '$design',
 '$traje', '$horario', '$lugar')";

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
     * Uma matriz associativa contendo variáveis ​​de sessão disponíveis 
     * para o script atual. Consulte a documentação das funções da 
     * sessão para obter mais informações sobre como isso é usado.

     */
    $_SESSION['tipo'] = $tipo;
    $_SESSION['convidados'] = $convidados;
    $_SESSION['comida'] = $comida;
    $_SESSION['funcionarios'] = $funcionarios;
    $_SESSION['musica'] = $musica;
    $_SESSION['design'] = $design;
    $_SESSION['traje'] = $traje;
    $_SESSION['horario'] = $horario;
    $_SESSION['lugar'] = $lugar;

    /**
     * Enviar um cabeçalho HTTP bruto
     * @param string
     * @return void

     */
    header("Location: TelaFinal.php");
} else{
    header("Location: TelaEventos.php");
}


?>