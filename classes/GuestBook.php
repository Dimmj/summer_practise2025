<?php
class GuestBook {
    protected array $records;
    protected string $path_to_book;

    public function __construct(string $path) {
        $this->path_to_book = $path;
        $this->records = file($path);
    }

    public function getData(): array{
        return $this->records;
    }

    public function append(string $text) {
        $this->records[] = $text;
    }

    public function delete($index) {
        unset($this->records[$index]);
    }

    public function save() {
        file_put_contents($this->path_to_book, implode("\n", $this->records));
    }
}