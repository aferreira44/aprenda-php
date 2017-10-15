<?php

class QueryBuilder{

    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statememt = $this->pdo->prepare("select * from $table");
        
        $statememt->execute();
        
        return $statememt->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $params){
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($params)),
            ':' . implode(', :', array_keys($params))
        );

        try {

            $statememt = $this->pdo->prepare($sql);
            
            $statememt->execute($params);

        } catch (Excpetion $e){
            die($e->getMessage());
        }
    }

}