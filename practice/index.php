<?php

$heading = "home";

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die(); //this kills the script
}

require "views/index.view.php";