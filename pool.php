<?php
    function createConnection(){
        $servername = "127.0.0.1";
        $database = "konecta";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
?>