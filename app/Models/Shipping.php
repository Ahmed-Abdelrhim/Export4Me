<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $table = 'shippings';
    protected $fillable = ['company_name', 'owner_name', 'manager_name', 'address',
        'website', 'media', 'email', 'landline', 'mobile_phone', 'shipping_types', 'commercial_record', 'created_at', 'updated_at'
    ];
}
