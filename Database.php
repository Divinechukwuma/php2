<?php


class Database
{


    public $connection;


    public function __construct($config)
    {

        //when using the function build query it carries the keys and property from the assoc array and tranform it into an http query string

        $dsn ='mysql:' . http_build_query($config, '',';'); //example host=localhost; dbname=php2;
        $username = "divine";
        $password = "CHUKs989@$";


        $this->connection = new PDO($dsn, $username, $password, [

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            
        ]);

    }

    public function query($query , $param = [])
    {


        $statement = $this->connection->prepare($query);

        $statement->execute($param);

        return $statement;
    }
}