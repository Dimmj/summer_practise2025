<?php
class GuestBook {
    protected array $records;
    protected $dbh;

    public function __construct() {
        $this->dbh = new PDO('pgsql:host=localhost;port=5432;dbname=guest_books', 'postgres', '0000');
        $sql = 'select * from guest_book1';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $this->records = $sth->fetchAll();
    }

    public function getData(): array{
        return $this->records;
    }

    public function append(string $username, string $date) {
        $this->records[] = ['username' => $username, 'date_record' => $date];
    }

    public function save() {
        $sql = 'delete from guest_book1';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

        $new_sql = 'insert into guest_book1(id_record, username, date_record) values(:id_rec, :username, :date)';
        $sth = $this->dbh->prepare($new_sql);
        foreach ($this->records as $index => $record) {
            $sth->execute([':id_rec' => $index + 1,':username' => $record['username'], ':date' => $record['date_record']]);
        }
    }
}