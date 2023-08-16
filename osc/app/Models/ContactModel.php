<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;


    protected $allowedFields = ['value', 'type', "officeId"];

    protected $returnType = 'array';
    
    public function getContact($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();

    }
    
    public function getOfficeContactByType($officeId, $type)
    {
        $sql = 'SELECT * FROM contact  
        WHERE contact.type = ? AND contact.officeId = ?';
        $query = $this->query($sql, [$type, $officeId]);
        $results = $query->getResultArray("array");
        return $results;

    }
}

