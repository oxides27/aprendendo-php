<?
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "php básico";

$conexao = mysqli_connect ($host, $usuario, $senha, $bd);

if (mysqli_connect_errno ($conexao)) {
    echo " Deu merda. Verifica";
} else {
    echo " Conectou";
}
?>
