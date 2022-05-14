<?php namespace App\Models;

use CodeIgniter\Model;

class SubCategoryModel extends Model
{
    protected $table      = 'sub_categories';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'cat_id', 'user_id', 'name', 'is_status', 'data', 'created_at', 'updated_at', 'deleted_at' ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
    protected $afterFind = ['subCategoryAfterFind'];

    protected function subCategoryAfterFind(array $data){
    return $data;
    }    
  
}
