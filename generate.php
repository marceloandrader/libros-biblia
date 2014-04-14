<?php

require 'vendor/autoload.php';

use Philo\Blade\Blade;

$views = __DIR__.'/views';
$cache = __DIR__.'/cache';

$books = json_decode(file_get_contents(__DIR__ . '/books.json'), TRUE);

if (!$books) {
    throw new Exception('books.json is not readable/parseable');
}

$blade = new Blade($views, $cache);
echo $blade->view()->make('books')->
    with('books', $books);
