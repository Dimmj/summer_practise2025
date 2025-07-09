<?php
require(__DIR__ . '/autoload.php');

$book = new GuestBook(__DIR__ . '/books/book1.txt');

foreach ($book->getData() as $record) {
    echo $record['id_record'] . ' ' . $record['username'] . ' ' . $record['date_record'] . '<hr>';
}
?>

<form name="add" action="/add.php">
    <h3>Имя пользователя: </h3>
    <input type="text" name="username">
    <h3>Дата посещения: </h3>
    <input type="text" name="date">
    <button type="submit">Добавить запись</button>
</form>
