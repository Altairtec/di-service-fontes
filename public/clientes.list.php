<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Email</td>
    </tr>   
    <?php foreach ($listaCliente as $cliente) : ?>
    <tr>
        <td><?= $cliente['id'] ?></td>
        <td><?= $cliente['nome'] ?></td>
        <td><?= $cliente['email'] ?></td>
    </tr> 
    <?php endforeach; ?>    
</table>
