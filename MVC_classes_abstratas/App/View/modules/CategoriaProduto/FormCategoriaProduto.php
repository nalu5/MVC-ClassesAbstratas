<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registro de Categoria </title>
    <style>
        label, input { 
            display: block; 
                     }
    </style>
</head>
<body>
    <fieldset>
        <legend>Registro de Categorias</legend>

        <form action="/categoriaproduto/save" method="post">
    
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <label for="nome_categoria">Nome da categoria do produto:</label>
            <input id="nome_categoria" name="nome_categoria" value="<?= $model->nome_categoria ?>" type="text" />
            
            <button type="submit">Mandar</button>
        
        </form>
    </fieldset>
    
</body>
</html>