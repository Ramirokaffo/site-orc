<?php

namespace App\Models;

use CodeIgniter\Model;

class OscModel extends Model
{
    protected $table = 'osc';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['isVerify', "name", "description", "vision", "logo", "createDate", "autorisation", "webSite", "slogan", "categoryId", "domainId"];
    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function getOsc($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        $builder = $this->table('osc');
        $builder->select('osc.*, category.name as category_name, domain.name as domain_name');
        $builder->where("osc.id", $id);
        $builder->join('category', 'category.id = osc.categoryId', 'left');
        $builder->join('domain', 'domain.id = osc.domainId', 'left');
        $query = $builder->get();
        $results = $query->getFirstRow("array");
        return $results;
    }
    
    
    public function getByDomain($domainId)
    {
        $builder = $this->table('osc');
        $builder->select('osc.*, category.name as category_name');
        $builder->where("domainId", $domainId);
        $builder->join('category', 'category.id = osc.domainId', 'left');
        $query = $builder->get();
        $results = $query->getResultArray();
        return $results;
        
    }

}

