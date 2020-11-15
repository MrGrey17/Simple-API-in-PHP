<?php
    class Category {
        private $connection;
        private $table_name = 'categories';

        public $id;
        public $name;
        public $description;
        public $created;

        public function __construct($db) {
            $this->connection = $db;
        }

        public function readAll(){
            $query = 'SELECT id, name, description
                    FROM ' . $this->table_name . '
                    ORDER BY name';

            $stmt = $this->connection->prepare($query);
            $stmt->execute();

            return $stmt;
        }

        public function read(){
            $query = 'SELECT id, name, description
                    FROM ' . $this->table_name . '
                    ORDER BY name';

            $stmt = $this->connection->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }
?>