<?php

include "app/init.php";

if(isset($_GET['q'])){

    $q = $_GET['q'];

    $query = $es->search([

            'body' => [
                'query' => [
                    'bool' => [
                        'should' => [
                                'match' => ['title' => $q],
                                 'match' => ['body' => $q]
                        ]
                    ]
                ]
            ]
    ]);

    echo "<pre>";
    print_r($query);
    echo "</pre>";


    if($query['hits']['total'] >= 1){
        $results = $query['hits']['hits'];
    }


}

?>

<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Search |Es </title>
    <link  rel="stylesheet" href="css/main.css">

</head>

<body>
<form action="index.php" method="get" autocomplete="off">

    <label>
        Search for something
        <input type="text" name="q">
    </label>
    <br /><br />
    <input type="submit" value="Search">
</form>


</body>

</html>

