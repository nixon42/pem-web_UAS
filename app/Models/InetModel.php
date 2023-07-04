<?php

namespace App\Models;

use CodeIgniter\Model;

class InetModel extends Model
{
    protected $table = 'inets';
    protected $allowedFields = ['inet_name', 'inet_price'];
    protected $validationRules = [
        'inet_name' => 'required',
        'inet_price' => 'required|integer',
    ];

    public function customers()
    {
        return $this->hasMany(CustomerModel::class, 'inet_id');
    }
}
