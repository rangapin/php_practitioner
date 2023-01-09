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
        $sql = sprintf (
            'insert into % (%s) values (%s)',
            $table, 
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        $statement = $this->pdo->prepare($sql);

        $statement->execute();
    }
}