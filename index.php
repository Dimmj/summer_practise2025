<?php
require(__DIR__ . '/autoload.php');


$b = new GuestBook(__DIR__ . '/books/book1.txt');
var_dump($b);