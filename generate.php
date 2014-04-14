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
file_put_contents(__DIR__.'/dist/index.html', $blade->view()->make('books')->
    with('books', $books));
echo "file dist/index.html was created";
