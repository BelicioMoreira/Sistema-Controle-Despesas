<?php

    namespace app\models;
    use \PDO;
    use PDOException;

    if(file_exists(__DIR__ . "/../../config/server.php")) {
        require_once __DIR__ . "/../../config/server.php";
    }

    class mainModel 
    {
        private $server = DB_SERVER;
        private $db = DB_NAME;
        private $user = DB_USER;
        private $pass = DB_PASS;

        protected function createConnect(): PDO 
        {
            try {
                $connection = new PDO (
                    "mysql:host=".$this->server.
                    ";dbname=".$this->db, 
                    $this->user, 
                    $this->pass);

                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $connection->exec("SET CHARACTER SET utf8");

                return $connection;

            } catch (PDOException $e) {
                die ('Erro ao conectar com o banco de dados ' . $e->getMessage());
            }
            return false;
        }

        protected function executeQuery($query)
        {
            $sql=$this->createConnect()->prepare($query);
            $sql->execute();
            
            return $sql;
        }

        public function cleanString ($string): string
        {
            $words = ["<script>", "</script>", "<script src", "<script type=", "SELECT * FROM", "SELECT ", " SELECT ", "DELETE FROM", "INSERT INTO", "DROP TABLE", "DROP DATABASE", "TRUNCATE TABLE", "SHOW TABLES", "SHOW DATABASES", "<?php", "?>", "--", "^", "<", ">", "==", "=", ";", "::"];
            
            $string = trim($string);
            $string = stripslashes($string);

            foreach ($words as $word) 
            {
                $string = str_ireplace($word, "", $string);
            }
            
            $string = trim($string);
            $string = stripslashes($string);

            return $string;
        }


    }
