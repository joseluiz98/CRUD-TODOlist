<?php
    require 'tasks.php';

    $dados = new Task();
    $task = $dados->getTask($_GET['id']);

    if (isset($_POST) && sizeof($_POST) > 0)
	{
		$dados = new Task();
        $dados->updateTask($_POST);
        header("Location: /index.php");
    }
?>


<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css"/>
    <title>Hello, world!</title>
    </head>
    <body>
    <div class="container pt-3 mt-3">
        <h2>Editar Tarefa <?= $task['id']; ?></h2>

        <form class="mb-5" action="edit.php" method="POST">
            <div class="form-group row">
            <div class="col-sm-10">
                <input name="descricao" type="text" class="form-control" value= <?= $task['descricao']; ?>>
            </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </div>
            </div>
        </form>
    </div>
    </body>
</html>