<?php
define('APP_ROOT', dirname(__DIR__, 1));

require_once APP_ROOT . '/config/config.php';
require_once APP_ROOT . '/vendor/autoload.php';

// $twig_options['cache'] = APP_ROOT . '/templates/cache';
// $twig_options['degub'] = DEV;

$loader = new Twig\Loader\FilesystemLoader(APP_ROOT . '/templates');
$twig = new Twig\Environment($loader);
$twig->addGlobal('doc_root', DOC_ROOT);