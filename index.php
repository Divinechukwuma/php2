<?php

require 'functions.php';
// require 'router.php';

//Connect to the database and execute the query 


class database
{

    public function query()
    {

        $dsn = "mysql:host=localhost;dbname=php2";
        $username = "divine";
        $password = "CHUKs989@$";


        $pdo = new PDO($dsn, $username, $password);


        $statement = $pdo->prepare("SELECT * FROM tbl_php");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new database();

$posts = $db->query();


// dd($posts);

foreach ($posts as $post) {

    echo "<li>" . $post['title'] . "</li>";
}
