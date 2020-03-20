<?
include ("basico/conexao.php");

$sql_tipo = "SELECT * FROM livros";
$resulta = $conexao->query($sql_tipo);
if ($resulta->num_rows > 0){

    while ( $row = $resulta->fetch_assoc()){            

        echo '<tr>';
        echo '<td>'. $row['id'] .'</td>';
        echo '<td>'. $row['data'] .'</td>';
        echo '<td>'. $row['autor'] .'</td>';
        echo '<td>'. $row['nome'] .'</td>';
        echo '</tr>';
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Livros</title>
    </head>
    <body>
    <h2>Aluguel de Livros</h2>
    <p>Treinamento.</p>
        <table>
            <tr>
                <th>Código:</th>
                <th>Data:</tdh>
                <th>Autor:</th>
                <th>Nome:</th>
            </tr>
        </table>
    </body>

</html>


<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>


