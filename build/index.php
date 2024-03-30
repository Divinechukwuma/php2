<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>

    <?php

    // $cool = "hey";

    // echo $cool ." wassup";

    // $name = "Dark matter";

    // $read = false;

    // //When using boolean the default is true so if u just put the naame of a variable it  is automatically true

    // if ($read){

    //     $message = "you have read $name";

    // }else{

    //     $message = "you have NOT read $name";

    // }



    // 
    ?>

    <!--<h1>
    <?= $message ?>
 </h1> -->

    <h1> Recommended book</h1>

    <?php

    $books = [

        //the first 1 is the identifier

        [
            'name' => 'act of war',
            'author' => 'divine',
            'realeaseYear' => 2006,
            'purchaseUrl' => ' http/awesome'
        ],

        [
            //key
            'name' => 'hail mary',
                    //value
            'author' => 'oge',
            'realeaseYear' => 1990,
            'purchaseUrl' => ' http/awesome'
        ],

        [
            'name' => 'rich dad poor dad',
            'author' => 'oge',
            'realeaseYear' => 2060,

            'purchaseUrl' => ' http/awesome'
        ] 


    ];

    function filter($items, $fn)
    {

        //creatiing an empty array   
        $filteredItems = [];

        foreach ($items as $item) {

            if ($fn($item)) {

                $filteredItems[] = $item;
            }
        }

        return  $filteredItems ;
    }

    

    $filteredBooks = array_filter($books, function ($book){

        return $book['realeaseYear'] >= 2000;

    })


 
    //  foreach($books as $book){

    //     //when putting the variable in a curly braces it says 
    //     //that it should focus on the code and then u can add anything after
    //     echo "<li>{$book}TM</li>";

    //this is if u just want to display the content in the array and dont want to any external factor
    //     echo "<li>$book</li>";

    //  }

    ?>
    <!-- this is a shorthand for loops-->
    <?php foreach ($filteredBooks as $book) : ?>



        <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?>
        </a>

        <li><?= $book['name'] ?> (<?= $book['realeaseYear'] ?> )- by <?= $book['author'] ?>

        </li>


    <?php endforeach; ?><br><br>





</body>

</html>