<?php

namespace App\Models;

use CodeIgniter\Model;

class OfficeModel extends Model
{
    protected $table = 'office';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;


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

    public function getOffice($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();

        
    }
}

