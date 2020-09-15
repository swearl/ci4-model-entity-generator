<?php
namespace Config;

use CodeIgniter\Config\BaseConfig;

class MakeModel extends BaseConfig
{
    public $primaryKey = "id";
    public $returnType = "array";
    public $useTimestamps = true;
    public $createdField = 'created_at';
    public $updatedField = 'updated_at';
    public $useSoftDeletes = false;
    public $deletedField = 'deleted_at';
}
