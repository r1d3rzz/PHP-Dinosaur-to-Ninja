<?php

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\Loader\FilesystemLoader;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\Helper\SlotsHelper;
use Symfony\Component\Templating\TemplateNameParser;

function view(string $name, array $data = [], $code = 200)
{
    $filesystemLoader = new FilesystemLoader(__DIR__ . '/views/%name%');

    $templating = new PhpEngine(new TemplateNameParser(), $filesystemLoader);
    $templating->set(new SlotsHelper());

    return new Response(
        $templating->render("$name.view.php", $data),
        $code
    );
}

function redirect(string $path = "/")
{
    return new Response("", 301, [
        "location" => $path
    ]);
}
