<?php

// connect to my mysql database and execute a query
$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
$DB = new DatabaseConnection($dsn);

$user_id = $_GET['id'] ?? null;

if (!$user_id) {
    require "views/404.php";
    exit;
}

// Get user information
$user = $DB->query('SELECT * FROM users WHERE id = :id', ['id' => $user_id])->fetch();

if (!$user) {
    require "views/404.php";
    exit;
}

// Get all notes for this user
$notes = $DB->query('SELECT n.*, u.name as user_name FROM Notes n LEFT JOIN users u ON n.user_id = u.id WHERE n.user_id = :user_id', ['user_id' => $user_id])->fetchAll();

$heading = "Notes by " . htmlspecialchars($user['name']);

require "views/user.view.php";