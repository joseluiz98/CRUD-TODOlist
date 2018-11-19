<?php
    require 'tasks.php';
    if (isset($_POST) && sizeof($_POST) > 0)
	{
		$dados = new Task();
        $dados->insertTask($_POST);
    }

    header("Location: /index.php");
    die();
?>