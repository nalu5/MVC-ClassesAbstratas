<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Produto</title>
    <style>
        label, input { 
            display: block; 
                     }
    </style>
</head>
<body>
    <fieldset>
        <legend>Registro de Produtos</legend>

        <form method="post" action="/produto/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome_produto">Nome do produto:</label>
            <input id="nome_produto" name="nome_produto" value="<?= $model->nome_produto ?>" type="text" />

            <label for="codigo">Código de barras:</label>
            <input id="codigo" name="codigo" value="<?= $model->codigo ?>" type="text" />

            <label for="descricao">Descrição:</label>
            <input id="descricao" value="<?= $model->descricao ?>" name="descricao" type="text" />

            <label for="valor">Valor do produto:</label>
            <input id="valor" name="valor" value="<?= $model->valor ?>" type="text" />

            <label for="id_categoria">Categoria:</label>
            <select id="id_categoria" name="id_categoria">
            
            <?php foreach ($modelCategoria->rows as $item) : ?>
                    <option value="<?= $item['id'] ?>"><?= $item[nome] ?></option>
            <?php endforeach ?>
            </select>

            <button type="submit">Mandar</button>

        </form>
    </fieldset>
    
</body>
</html>