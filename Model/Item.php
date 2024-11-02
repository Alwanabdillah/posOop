<?php

require_once __DIR__ . '/Model.php';

class Item extends Model
{
    protected $table = 'items';
    public function create($datas)
    {
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
