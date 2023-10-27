<?php

function view(string $name, array $data = [])
{
    extract($data);
    require_once __DIR__ . "/views/$name.view.php";
}

function redirect(string $path = "/")
{
    header("Location: $path");
}
