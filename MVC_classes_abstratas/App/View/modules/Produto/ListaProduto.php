<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome do Produto</th>
            <th>Código de Barras</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Categoria</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/produto/delete?id=<?= $item->id ?>">Excluir</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/produto/form?id=<?= $item->id ?>">Editar<?= $item->nome_produto ?></a>
            </td>
          
            <td><?= $item->codigo ?></td>
            <td><?= $item->descricao ?></td>
            <td><?= $item->valor ?></td>
            <td><?= $item->id_categoria ?></td>
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