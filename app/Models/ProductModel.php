<?php

declare(strict_types=1);

namespace App\Models;

use App\Entities\Product;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table                  = 'products';
    protected $primaryKey             = 'id';
    protected $useAutoIncrement       = true;
    protected $returnType             = Product::class;
    protected $useSoftDeletes         = false;
    protected $protectFields          = true;
    protected $allowedFields          = [
        'name', 'description', 'price', 'stock', 'category_id'
    ];
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
    protected array $casts            = [];
    protected array $castHandlers     = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
