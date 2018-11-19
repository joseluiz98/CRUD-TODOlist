<?php
    require 'tasks.php';
    if (isset($_GET) && sizeof($_GET) > 0)
	{
		$dados = new Task();
        
        if ($dados->removeTask($_GET))
        {
            header("Location: /index.php");
            exit;
        } else {
            echo "Ocorreu um erro.";
        }
    }
    die();
?>