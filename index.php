<?php
require(__DIR__ . '/autoload.php');

$book = new GuestBook(__DIR__ . '/books/book1.txt');

foreach ($book->getData() as $record) {
    echo $record . '<hr>';
}
?>

<form name="add" action="/add.php">
    <input type="text" name="record">
    <button type="submit">Добавить запись</button>
</form>
