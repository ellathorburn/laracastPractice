<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
            body {
                display: grid;
                place-items: center;
                margin: 0;
                font-family: sans-serif;
            }
    </style>
</head>
<body>
<?php
$books = [
        ["Name"=>"Harry Potter"],
    ["Name" =>"Percy Jackson"],
    ["Name" => "1984"]
];

?>
<h1>
Recommended Books
</h1>

<p>
    <?php foreach ($books as $book): ?>
    <p> <?= $book["Name"]?> </p>
<?php endforeach; ?>

</p>
</body>
</html>