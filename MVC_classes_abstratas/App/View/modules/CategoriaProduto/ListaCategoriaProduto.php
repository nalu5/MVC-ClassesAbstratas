<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categoria</title>
</head>

<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome da Categoria do Produto</th>
            <th>Ações</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/categoriaproduto/exclui?id=<?= $item->id ?>">Exluir</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/categoriaproduto/form?id=<?= $item->id ?>">Editar<?= $item->nome_categoria ?></a>
            </td>

        </tr>


        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Não foi encontrado nenhum registro.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>