<?php
    class DatabaseQueries {
        private $servername = "localhost";
        private $username   = "root";
        private $password   = "";
        private $database   = "adh";
        public  $conn;

        // Database Connection
        public function __construct()
        {
            $this->conn = new mysqli($this->servername, $this->username,$this->password,$this->database);
            if(mysqli_connect_error()) {
             trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
            }else{
            return $this->conn;
            }
        }

        public function getRecords($table) {
            $query = "SELECT * FROM `$table`";
            $result = $this->conn->query($query);
            if($result){
                if($result->num_rows > 0){
                    $data = array();
                    while($row = $result->fetch_assoc()) {
                        $date[] = $row;
                    }
                    return $data;
                }else{
                    echo "No records have been found.";
                }
            }else{
                echo "Error in:" . $query . "<br>" . $this->conn->error;
            }
        }
    }