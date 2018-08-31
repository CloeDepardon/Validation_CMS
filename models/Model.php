<?php
/**
 *
 */

class Model
{
    protected $dbConnec;
    protected $tableName;

    function __construct()
    {
        $this->dbConnec = new PDO('mysql:host=localhost;dbname=' . Config::DB_NAME, Config::DB_USER, Config::DB_PASS);
    }

    public function getAll()
    {
        $request = $this->dbConnec->prepare('SELECT * FROM ' . $this->tableName);
        $request->execute();
        $results = $request->fetchAll(PDO::FETCH_OBJ);
        foreach($results as $result){
          echo '<li><a href=/view/' . $result->title . '>' . ($result->title) . '</a> </li>';
        }
        return $results;
    }
    public function getOne($identifierKey, $identifierValue)
    {
        $request = $this->dbConnec->prepare('SELECT * FROM ' . $this->tableName . ' WHERE ' . $identifierKey .  ' = "' . $identifierValue . '" LIMIT 1');
        $request->execute();
        $results = $request->fetchAll(PDO::FETCH_OBJ);
        return $results[0];
    }
}
