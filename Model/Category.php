<?php

require_once __DIR__ . '/Model.php';

class Category extends Model
{
    protected $table = 'categories';
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

    public function search($keyword){
        $keyword = "WHERE name LIKE '%{$keyword}%'";
        return parent::searchData($keyword, $this->table);
    }

    public function paginate($limit, $start){
        return parent::paginateData($limit, $start, $this->table);
    }
}
