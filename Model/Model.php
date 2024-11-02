<?php
require_once __DIR__ . '/../DB/Connection.php';
require_once __DIR__ . '/../interface/ModelInterface.php';
abstract class Model extends Connection implements ModelInterface
{
    public function createData($datas, $table)
    {
        $key = array_keys($datas);
        $value = array_values($datas);
        $key = implode(",", $key);
        $value = implode("','", $value);
        $query = "INSERT INTO $table ($key) VALUES ('$value')";
        // echo $query;
        $result = mysqli_query($this->db, $query);
        return $result;

        if ($result) {
            return $datas;
        } else {
            return false;
        }
    }

    public function allData($table)
    {
        $query = "SELECT * FROM $table";
        $result = mysqli_query($this->db, $query);

        return $this->convertData($result);
    }

    public function convertData($datas)
    {
        $data = [];
        while ($row = mysqli_fetch_assoc($datas)) {
            $data[] = $row;
        }
        return $data;
    }

    public function findData($id, $table)
    {
        $query = "SELECT * FROM $table WHERE id = $id";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function updateData($id, $datas, $table)
    {
        $key = array_keys($datas);
        $value = array_values($datas);

        $query = "UPDATE $table SET ";

        for ($i = 0; $i < count($key); $i++) {
            $query .= $key[$i] . " = '" . $value[$i] . "'";
            if ($i != count($key) - 1) {
                $query .= ",";
            }
        }
        $query .= " WHERE id = $id";
        $result = mysqli_query($this->db, $query);

        if ($result) {
            return $datas;
        } else {
            return false;
        }
    }

    public function deleteData($id, $table)
    {
        $query = "DELETE FROM $table WHERE id = $id";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function searchData($keyword, $table)
    {
        $query = "SELECT * FROM $table $keyword";
        $result = mysqli_query($this->db, $query);

        return $this->convertData($result);
    }

    public function paginateData($limit, $start, $table)
    {
        $query = "SELECT * FROM $table LIMIT $start, $limit";
        $result = mysqli_query($this->db, $query);

        return $this->convertData($result);
    }
}
