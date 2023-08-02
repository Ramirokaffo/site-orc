<?php

namespace App\Models;

use CodeIgniter\Model;

class OfficeModel extends Model
{
    protected $table = 'office';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;


/**
 * @var float
 */
protected $long;

/**
 * @var float
 */
protected $lat;

/**
 * @var bool
 */
protected $isHeadOffice;


    protected $allowedFields = ['country', 'city', 'location', "isHeadOffice", "long", "lat", "oscId"];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function getOffice($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();

        
    }
}

