<?php


class Database
{


    public $connection;


    public function __construct()
    {

        $config = [

            'host' => 'localhost',
            'dbname' => 'php2'

        ];

        dd('mysql:' . http_build_query($config, '',';'));
        
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";
        $username = "divine";
        $password = "CHUKs989@$";


        $this->connection = new PDO($dsn, $username, $password, [

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            
        ]);

    }

    public function query($query)
    {


        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}