<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table            = 'messages';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['sender_id', 'recipient_id', 'subject', 'body', 'is_read', 'created_at'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
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

    /**
     * Get unread messages for a specific recipient
     */
    public function unreadMessagesByRecipient(int $recipientId): array
    {
        return $this->where('recipient_id', $recipientId)
                   ->where('is_read', 0)
                   ->orderBy('created_at', 'DESC')
                   ->findAll();
    }
    
    /**
     * Count unread messages for a specific recipient
     */
    public function countUnreadMessagesByRecipient(int $recipientId): int
    {
        return $this->where('recipient_id', $recipientId)
                   ->where('is_read', 0)
                   ->countAllResults();
    }
}
