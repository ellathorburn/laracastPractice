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
        "Harry Potter",
    "Percy Jackson",
    "1984"
];

?>
<h1>
Recommended Books
</h1>

<ul>
    <?php foreach ($books as $book): ?>
        <li><?= "You have read " . $book ?> </li>
    <?php endforeach; ?>
</ul>
</body>
</html>