
    <a href= "adicionar.php">Adicionar Usuário</a>

    <table border="1" width="100%">

        <tr>
            <th>ID></th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
        </tr>
        <?php foreach ($lista as $usuario): ?>
            <tr>
                <td><?=$usuario['id'];?></td>
                <td><?=$usuario['nome'];?></td>
                <td><?=$usuario['email'];?></td>

                <td>
                     <a href="editar.php?id=<?=$usuario['id'];?>">[editar]</a>
                     <a href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir ]</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>