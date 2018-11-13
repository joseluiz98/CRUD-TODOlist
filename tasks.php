
<?php
class Tasks {

    protected $conexao = null;

    public function conectar()
    {
        $this->conexao = new PDO("mysql:host=localhost;dbname=tasks", "root", "root");
    }

    public function getAllTasks()
    {
        $comando = $this->conexao->prepare("SELECT * FROM task");
        $comando->execute();

        return $comando;
    }
}
?>
