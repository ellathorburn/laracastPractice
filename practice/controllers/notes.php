<?php

$heading = "Notes";

// connect to my mysql database and execute a query
$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
$DB = new DatabaseConnection($dsn);

$notes = $DB->query("SELECT * FROM Notes")->fetchAll();

require "views/notes.view.php";