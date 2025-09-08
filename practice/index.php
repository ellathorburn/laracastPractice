<?php

require('functions.php');
 //require('router.php');


// connect to my mysql database and execute a query
$DB = new DatabaseConnection("mysql:host=mysql;port=3306; dbname=demo; charset=utf8mb4");

$posts = $DB->query("select * from blog_titles");

foreach($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}
