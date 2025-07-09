<?php
require(__DIR__ . '/autoload.php');

$book = new GuestBook(__DIR__ . '/books/book1.txt');
$book->append($_GET['username'], $_GET['date']);
$book->save();

header('Location: /index.php');