<?php

declare(strict_types=1);

namespace App\Models;

use CodeIgniter\Shield\Models\UserModel as ShieldUserModel;

class UserModel extends ShieldUserModel
{
    protected function initialize(): void
    {
        parent::initialize();

        $this->allowedFields = [
            ...$this->allowedFields,

            'first_name',
            'last_name',
            'dob',
            'address',
            'alternative_address',
            'city',
            'state',
            'zip',
            'client_id',
            'description',
            'image',
            'phone',
            'mobile_number',
            'message_checked_at',
            'notification_checked_at',
            'job_title',
            'user_type',
            'note',
            'sticky_note',
            'enable_web_notification',
            'enable_email_notification',
            'request_account_removal',
            'avatar',
            'whatsapp',
            'instagram',
            'facebook',
            'twitter',
            'linked_in',
            'skype',
            'tiktok',
        ];
    }
}
