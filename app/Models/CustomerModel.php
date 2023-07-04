<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers';
    protected $allowedFields = ['customer_name', 'email', 'inet'];
    protected $validationRules = [
        'customer_name' => 'required',
        'email' => 'required|valid_email',
        'inet' => 'required|integer',
    ];

    public function inet()
    {
        return $this->belongsTo(InetModel::class, 'inet_id');
    }
}
