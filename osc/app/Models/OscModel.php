<?php

namespace App\Models;

use CodeIgniter\Model;

class OscModel extends Model
{
    protected $table = 'osc';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['isVerify', "name", "description", "vision", "logo", "creationDate", "matricule", "webSite", "slogan", "categoryId", "domainId"];
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
            $query = $this->table('osc')
                ->select('osc.*, domain.name AS domain_name, category.name AS category_name, office.country as country, office.city as city')
                ->join('category', 'category.id = osc.categoryId', 'LEFT')
                ->join('domain', 'domain.id = osc.domainId', 'LEFT')
                ->join('office', 'osc.id = office.oscId AND office.isHeadOffice = 1', 'LEFT');
            return $query;
        }
        $sql = 'SELECT osc.*, osc.id, domain.name as domain_name, 
        category.name as category_name, 
        office.location as location, 
        office.country as country, 
        office.id as officeId, 
        office.city as city FROM osc 
        LEFT JOIN category ON category.id = osc.categoryId 
        LEFT JOIN domain ON domain.id = domainId
        LEFT JOIN office ON osc.id = office.oscId AND office.isHeadOffice = 1 
        LEFT JOIN contact ON office.id = contact.officeId 
        WHERE osc.id = ?';
        $query = $this->query($sql, [$id]);
        $results = $query->getFirstRow("array");
        // var_dump($results);

        return $results;
    }


    public function getByDomain($domainId)
    {
        $builder = $this->table('osc');
        $builder->select("osc.*, domain.name AS domain_name, category.name AS category_name, office.country as country, office.city as city");
        $builder->where("domainId", $domainId);
        $builder->join('category', 'category.id = osc.categoryId', 'left');
        $builder->join('domain', 'domain.id = osc.domainId', 'left');
        $builder->join('office', 'office.oscId = osc.id', 'left');
        $builder->join('contact', 'contact.officeId = office.id', 'left');
        // $query = $builder->get();
        // $results = $query->getResultArray("array");
        return $builder;
    }

    public function getByCategory($categoryId)
    {
        $builder = $this->table('osc');
        $builder->select('osc.*, domain.name AS domain_name, category.name AS category_name, office.country as country, office.city as city');
        $builder->where("categoryId", $categoryId);
        $builder->join('category', 'category.id = osc.categoryId', 'left');
        $builder->join('domain', 'domain.id = osc.domainId', 'left');
        $builder->join('office', 'office.oscId = osc.id', 'left');
        $builder->join('contact', 'contact.officeId = office.id', 'left');
        return $builder;
    }

    public function getOscByStatus($status)
    {
        return $this->where(['isVerify' => $status]);
    }

    public function getSearchResult($searchInput)
    {
        $builder = $this->table('osc');
        $builder->select('osc.*, domain.name AS domain_name, category.name AS category_name, office.country as country, office.city as city');
        $builder->join('category', 'category.id = osc.categoryId', 'left');
        $builder->join('domain', 'domain.id = osc.domainId', 'left');
        $builder->join('office', 'office.oscId = osc.id', 'left');
        $builder->join('contact', 'contact.officeId = office.id', 'left');
        $builder->like('osc.name', $searchInput);
        $builder->orLike('osc.description', $searchInput);
        $builder->orLike('country', $searchInput);
        $builder->orLike('location', $searchInput);
        $builder->groupBy(['osc.id', "category.id", "domain.id", "office.id", "contact.id"]);
        return $builder;
    }
}
