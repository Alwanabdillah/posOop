<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pos_oop');

$koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$koneksi) {
    die("gagal terhubung" . mysqli_connect_error());
}

function searchData($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function cari($keyword)
{
    $query = "SELECT * FROM categories WHERE name LIKE '%$keyword%'";
    return searchData($query);
}
class Connection {
    public $db;
    public function __construct()
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(!$conn){
            die("gagal terhubung" . mysqli_connect_error());
        } else {
            $this->db = $conn;
            return $this->db;
        }
    }
}
?>