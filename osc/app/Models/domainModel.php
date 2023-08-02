<?php

namespace App\Models;

use CodeIgniter\Model;

class DomainModel extends Model
{
    protected $table = 'domain';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['name'];
    protected $returnType = 'array';

    public function getDomain($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }




    public function getSearchResult($searchInput)
    {
        $query = $this->db->query('SELECT * FROM domain WHERE name LIKE "%' . $searchInput . '%"');
        $results = $query->getResultArray();
        return $results;
    }





    // public function getSearchResult($searchInput) {
    //     $query = $this->select()
    //     ->from('domain dm')
    //     // ->join('category cat', 'cat.id = dm.categoryId', 'left')
    //     ->like('dm.name', '%'.$searchInput.'%');
    //     $rresult = $query->get()->getResultArray();
    //     // $rresult = array_unique($rresult);
    //     var_dump($rresult);
    //     // var_dump(json_encode($rresult));
    //     return $rresult;
    // }



}
