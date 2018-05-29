<?php

require_once "app/init.php";

if(!empty($_POST)){

    if(isset($_POST['title'], $_POST['body'], $_POST['keywords'])){

        $title = $_POST['title'];
        $body = $_POST['body'];
        $keywords = explode("," , $_POST['keywords']);

        $indexed = $es->index([

                'index' => 'articles',
                 'type' => 'article',
                 'id' => 1,
                 'body' => [
                         'title' => $title,
                         'body' => $body,
                         'keywords' => $keywords
                 ]
        ]);
    }
}

if($indexed){

    echo "<pre>";
    print_r($indexed);
    echo "</pre>";
}

?>

<html>

<head charset="utf-8">
    <title>Add | Es</title>
</head>

<body>

<form action="add.php" method="post" autocomplete="off">
    <label>
        Title
        <input type="text" name="title" />    </label>

    <br /><br />
    <label>
        Body
        <textarea name="body" rows="8"></textarea>
    </label>
    <br /><br />
    <label>
        Keywords
        <input type="text" name="keywords" placeholder="comma, seperated" />
    </label>
    <br />
    <input type="submit" value="Add" />
    <br /><br />
</form>

</body>

</html>

