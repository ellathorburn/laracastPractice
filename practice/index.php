<?php

require('functions.php');
 //require('router.php');


// connect to my mysql database
$dsn = "mysql:host=mysql;port=3306; dbname=demo; charset=utf8mb4";

$PDO = new PDO($dsn, "root", "password");

$statement = $PDO->prepare("select * from blog_titles");

$statement->execute();

$posts = $statement->fetchAll($PDO::FETCH_ASSOC);

foreach($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}
dd($posts);