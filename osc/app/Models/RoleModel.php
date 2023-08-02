<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['name', "canPublish", "canDeleteOsc", "userId"];
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    
    public function getRole($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();

        
    }
}

