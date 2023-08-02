<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;


    protected $allowedFields = ['value', 'type', "officeId"];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    
    public function getContact($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();

    }
}

