<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model {
  protected $table = 'services';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $returnType = 'array';
  protected $useSoftDeletes = false;
  protected $protectFields = true;
  protected $allowedFields = ['id', 'title', 'subtitle', 'image', 'section1Title', 'section1Content', 'section2Title', 'section2Content', 'schedule'];
  // Example default values
  protected $defaultValues = [
    'id' => 1,
    'title' => 'Professional Consultation',
    'subtitle' => 'Expert Advice',
    'image' => 'uploads/images/400x200.png',
    'section1Title' => 'What We Offer',
    'section1Content' => '1. Initial assessment<br>2. Customized planning<br>3. Strategy development<br>4. Implementation guidance<br>5. Follow-up support',
    'section2Title' => 'Benefits',
    'section2Content' => '- Increased efficiency<br>- Cost reduction<br>- Better decision making<br>- Long-term sustainability',
    'schedule' => 'Monday - Friday: 9am - 5pm'
  ];

  protected bool $allowEmptyInserts = false;
  protected bool $updateOnlyChanged = true;

  protected array $casts = [];
  protected array $castHandlers = [];

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat = 'datetime';
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

  // Validation
  protected $validationRules = [];
  protected $validationMessages = [];
  protected $skipValidation = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks = true;
  protected $beforeInsert = [];
  protected $afterInsert = [];
  protected $beforeUpdate = [];
  protected $afterUpdate = [];
  protected $beforeFind = [];
  protected $afterFind = [];
  protected $beforeDelete = [];
  protected $afterDelete = [];
}
