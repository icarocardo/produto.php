<?php
include 'conexao.php';
?>

<h2>Lista de Produtos</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Status</th>
</tr>

<?php
$resultado = pg_query($conn, "SELECT * FROM produto");

while ($linha = pg_fetch_assoc($resultado)) {
?>
<tr>
    <td><?php echo $linha['idproduto']; ?></td>
    <td><?php echo $linha['produtonome']; ?></td>
    <td><?php echo $linha['produtopreco']; ?></td>
    <td>
        <?php
        if ($linha['produtostatus'] == 't')
            echo "Ativo";
        else
            echo "Desativado";
        ?>
    </td>
</tr>
<?php
}
?>
</table>