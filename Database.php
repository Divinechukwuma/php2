<?
class database
{


    public $connection;


    public function __construct()
    {
        
        $dsn = "mysql:host=localhost;dbname=php2";
        $username = "divine";
        $password = "CHUKs989@$";


        $this->connection = new PDO($dsn, $username, $password);

    }

    public function query($query)
    {


        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}