<?php
class DatabaseConnection
{
    public function __construct()
    {
        $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

        if ($conn->connect_error)
        {
            die ("<h1>Database Connection Failed</h1>");
        }
        echo "Database Connected Successfully";
        return $this-> conn = $conn;
    }
}

?>