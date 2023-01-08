<?php 

class QueryBuilder

{
    protected $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)

    {
        $statement = $this->pdo->prepare('select * from {$table}');

        $statement->execute();

        return $statement->fectAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)

    {

    $statement -> execute['name']
    }
}