<?php
function urlIs($currentPage){
    return $_SERVER['REQUEST_URI'] === ($currentPage); //evaluates to a boolean true or false
}

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}