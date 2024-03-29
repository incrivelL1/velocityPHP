<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Descrição</td>
            <td>Status</td>
            <td>Opções</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->dados as $categoria): ?>
            <tr>
                <td><?= $categoria["id"] ?></td>
                <td><?= $categoria["descricao"] ?></td>
                <td><?= $categoria["statusRegistro"] ?></td>
                <td>
                    <a href="#">Visualizar</a>&nbsp;|&nbsp;
                    <a href="#">Alterar</a>&nbsp;|&nbsp;
                    <a href="#">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>