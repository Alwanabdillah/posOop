<?php

require_once __DIR__ . '/Model.php';

class Item extends Model
{
    protected $table = 'items';

    public function create($datas)
    {
        var_dump($datas["files"]);
        $nama_file = basename($datas['files']['attachment']['name']);
        $ektensi_file = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));
        $tmp_name = $datas['files']['attachment']['tmp_name'];
        $ektensi_allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'heic', 'raw'];
        if (!in_array($ektensi_file, $ektensi_allowed)) {
            return "Ektensi file tidak sesuai";
        }
        if ($datas['files']['attachment']['size'] > 5000000) {
            return "Size tidak boleh lebih dari 5mb";
        }
        $nama_file = random_int(1000, 9999) . '.' . $ektensi_file;

        move_uploaded_file($tmp_name, '../public/img/items/' . $nama_file);
        $datas = [
            "name" => $datas["post"]["name"],
            "attachment" => $nama_file,
            "price" => $datas["post"]["price"],
            "category_id" => $datas["post"]["category_id"],
        ];
        return parent::createData($datas, $this->table);
    }

    public function all()
    {
        return parent::allData($this->table);
    }

    public function find($id)
    {
        return parent::findData($id, $this->table);
    }

    public function update($id, $datas)
    {
        return parent::updateData($id, $datas, $this->table);
    }

    public function delete($id)
    {
        return parent::deleteData($id, $this->table);
    }
}
