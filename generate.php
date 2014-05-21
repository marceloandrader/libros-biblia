<?php

require 'vendor/autoload.php';

use Philo\Blade\Blade;

$views = __DIR__.'/views';
$cache = __DIR__.'/cache';

$books = json_decode(file_get_contents(__DIR__ . '/assets/books.json'), TRUE);

if (!$books) {
    throw new Exception('assets/books.json is not readable/parseable');
}

$blade = new Blade($views, $cache);
copy(__DIR__.'/assets/styles/master.css', __DIR__.'/dist/styles/master.css');
copy(__DIR__.'/assets/styles/bootstrap/css/bootstrap.min.css', __DIR__.'/dist/styles/bootstrap/css/bootstrap.min.css');
copy(__DIR__.'/assets/styles/bootstrap/css/bootstrap-theme.min.css', __DIR__.'/dist/styles/bootstrap/css/bootstrap-theme.min.css');
copy(__DIR__.'/assets/styles/master.css', __DIR__.'/dist/styles/master.css');
copy(__DIR__.'/assets/scripts/app.js', __DIR__.'/dist/scripts/app.js');

file_put_contents(__DIR__.'/dist/index.html', $blade->view()->make('books')->
    with('books', $books));
echo "file dist/index.html was created\n";
