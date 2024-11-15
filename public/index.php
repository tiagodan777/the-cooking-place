<?php
require_once '../src/bootstrap.php';

$data['teste'] = DOC_ROOT;
$data['year'] = date('d F Y');

echo $twig->render('index.html', $data);