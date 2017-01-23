<?php

namespace Siler\Twig;

function init($templatesPath, $templatesCachePath = null, $debug = null)
{
    if (is_null($debug)) {
        $debug = false;
    }

    $twig = new \Twig_Environment(new \Twig_Loader_Filesystem($templatesPath), [
        'debug' => $debug,
        'cache' => $templatesCachePath,
    ]);

    $GLOBALS['twig'] = $twig;

    return $twig;
}

function render($name, $data = [])
{
    $twig = $GLOBALS['twig'];
    return $twig->render($name, $data);
}