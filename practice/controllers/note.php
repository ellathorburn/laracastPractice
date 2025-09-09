<?php

$heading = "Note";

// connect to my mysql database and execute a query
$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
$DB = new DatabaseConnection($dsn);

$id = $_GET['id'] ?? null;

if (!$id) {
    require "views/404.php";
    exit;
}

$note = $DB->query('SELECT * FROM Notes WHERE id = :id', ['id' => $id])->fetch();

if (!$note) {
    require "views/404.php";
    exit;
}

require "views/note.view.php";