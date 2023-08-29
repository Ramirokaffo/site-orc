<?php

namespace App\Models;

use CodeIgniter\Model;

class OscUserModel extends Model
{
    protected $table = 'osc_user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['canPublish', "canDeleteOsc", "canAddAdmin", "isPrincipal", "userId", "oscId"];
    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getOscUser($id = false)
    {
        if ($id === false) {
            $query = $this->table('osc_user')
                ->select('osc_user.*');
            return $query;
        }
        $sql = 'SELECT osc_user.* 
        WHERE osc_user.id = ?';
        $query = $this->query($sql, [$id]);
        $results = $query->getFirstRow("array");

        return $results;
    }


}
