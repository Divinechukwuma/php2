<?php

namespace core;

use PDO;



class Database
{


    public $connection;
    public $statement;


    public function __construct($config)
    {

        //when using the function build query it carries the keys and property from the assoc array and tranform it into an http query string

        $dsn = 'mysql:' . http_build_query($config, '', ';'); //example host=localhost; dbname=php2;
        $username = "divine";
        $password = "CHUKs989@$";


        $this->connection = new PDO($dsn, $username, $password  , [

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

        ]);
    }

    public function query($query, $param = [])
    {


        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($param);

        return $this;
    }

    public function fetchAll()
    {

        return $this->statement->fetchALL();

    }

    public function find()
    {

        return $this->statement->fetch();

    }
    public function findOrFail(){

        $result = $this->find();

        if (! $result){

            abort();

        }

        return $result;
         
    }
}
