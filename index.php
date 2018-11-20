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
			<h2>Tarefas</h2>

			<form class="mb-5" action="insert.php" method="POST">
				<div class="form-group row">
				<div class="col-sm-10">
					<input name="descricao" type="text" class="form-control" placeholder="Digite sua tarefa aqui!">
				</div>
					<div class="col-sm-2">
						<button type="submit" class="btn btn-primary">Adicionar</button>
					</div>
				</div>
			</form>

			<?php
				require 'tasks.php';

				$dados = new Task();

				$tasks = $dados->getAllTasks();

				foreach ($tasks as $task)
				{
					echo '<div class="form-group row">';
					echo '<div class="col-sm-10">';
					echo "<h3>Tarefa " .$task['id']. "</h3>";
					echo "<p>";
					echo nl2br($task['descricao']);
					echo "</div>";
					echo '<div class="col-sm-2">';
					echo "<a href='edit.php?id=" .$task['id']."'>";
					echo "<img src='imgs/edit.svg'/>";
					echo "</a>";
					echo "<a href='delete.php?id=" .$task['id']."'>";
					echo "<img src='imgs/del.svg'/>";
					echo "</a>";
					echo "</div>";
					echo "</div>";
					echo "</p>";
				}
			?>
		</div>

		<div class="modal" tabindex="-1" role="dialog" id="editTaskModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Modal body text goes here.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
			</div>
		</div>
		</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>