<?php

class CategoryModel extends DB
{


    public function getData()
    {
        $sql = 'select * from videos';
        return mysqli_query($this->conn, $sql);
    }
    public function addData()
    {
    }

    public function createData()
    {
    }

    public function deleteData()
    {
    }
}
