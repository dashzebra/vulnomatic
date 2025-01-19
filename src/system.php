<?php
class Database {
    public function __construct(string $dsn) {
        $this->db = new PDO($dsn);
    }
}

class Post {
    public function getTitle() {
        return 'Post Title';
    }

    public function getExcerpt() {
        return 'A very enticing summary. Read more...';
    }
}

class Vulnomatic {
    private $database;

    public function __construct() {
        $this->database = new Database('sqlite:./db.sqlite3');
    }

    public function listAllPosts() {
        return [
            new Post()
        ];
    }
}

$vulnomatic = new Vulnomatic();
