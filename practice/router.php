<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path']; //look very carefully!

//this is like a lookup tables
$routes = [
    '/' => 'controllers/index.php',
    '/weather' => 'controllers/weather.php',
    '/contact' => 'controllers/contact.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/user' => 'controllers/user.php',
];

if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    require "views/404.php";
}
