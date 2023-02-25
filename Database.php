<?php
try {
    class Database {
        public $connection;
        public function __construct ($config) {
            $this->connection = new PDO("mysql:host=$config[servername];
                                        dbname=$config[dbname]",$config["username"], $config["password"]);
        }
        public function query ($query) {
            try {
                $statement = $this->connection->prepare($query);
                $statement->execute();
                $feedback = $statement->fetchAll();
                return $feedback;
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
} catch (\Throwable $th) {
    echo "Database connection failed";
}
