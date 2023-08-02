<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['name'];
    protected $returnType = 'array';

    public function getCategory($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }



    public function getSearchResult($searchInput)
    {
        $query = $this->db->query('SELECT * FROM category WHERE name LIKE "%' . $searchInput . '%"');
        $results = $query->getResultArray();
        return $results;
    }
}
