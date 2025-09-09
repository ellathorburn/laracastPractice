<?php

$heading = "Notes";

// connect to my mysql database and execute a query
$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
$DB = new DatabaseConnection($dsn);

$notes = $DB->query("SELECT n.*, u.name as user_name, u.id as user_id FROM Notes n LEFT JOIN users u ON n.user_id = u.id")->fetchAll();

require "views/notes.view.php";