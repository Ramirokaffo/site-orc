<?php

namespace App\Models;

use CodeIgniter\Model;

class ReclamationModel extends Model
{
    protected $table = 'reclamation';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["name", "creationDate", "matricule", "webSite", "phoneNumber1", "phoneNumber2", "email", "city", "country", "location", "categoryId", "domainId", "userId"];
    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getReclamation($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        $builder = $this->table('reclamation');
        $builder->select('reclamation.*, category.name as category_name, domain.name as domain_name');
        $builder->where("reclamation.id", $id);
        $builder->join('category', 'category.id = reclamation.categoryId', 'left');
        $builder->join('domain', 'domain.id = reclamation.domainId', 'left');
        $query = $builder->get();
        $results = $query->getFirstRow("array");
        return $results;
    }

    public function getByDomain($domainId)
    {
        $builder = $this->table('reclamation');
        $builder->select('reclamation.*, category.name as category_name');
        $builder->where("domainId", $domainId);
        $builder->join('category', 'category.id = reclamation.domainId', 'left');
        $query = $builder->get();
        $results = $query->getResultArray();
        return $results;
    }

    public function getByCategory($categoryId)
    {
        $builder = $this->table('reclamation');
        $builder->select('reclamation.*, category.name as category_name');
        $builder->where("categoryId", $categoryId);
        $builder->join('category', 'category.id = reclamation.categoryId', 'left');
        $query = $builder->get();
        $results = $query->getResultArray();
        // var_dump($results);

        return $results;
    }



}

// php spark migrate --all
