<?php
class DB
{
    protected $DB_HOST = 'localhost';
    protected $DB_USERNAME = 'root';
    protected $DB_PASSWORD = '';
    protected $DB_NAME = 'admin';
    protected $DB_PORT = 3306;

    function __construct()
    {
        $this->conn = mysqli_connect($this->DB_HOST, $this->DB_USERNAME, $this->DB_PASSWORD, $this->DB_NAME, $this->DB_PORT);
        // echo "ket noi thanh cong";

    }
}
