<?php
class GuestBook {
    protected array $records;
    protected string $path_to_book;

    public function __construct(string $path) {
        $this->path_to_book = $path;
        $this->records = file($path);
    }

    public function getData() {
        return $this->records;
    }

    public function append($text) {
        $this->records[] = $text . "\n";
    }

    public function delete($index) {
        unset($this->records[$index]);
    }
    
    public function save() {
        file_put_contents($this->path_to_book, implode('', $this->records));
    }
}