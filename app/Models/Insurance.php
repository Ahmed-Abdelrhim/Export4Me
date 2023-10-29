<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $table = 'insurances';

    protected $fillable = ['company_name', 'owner_name', 'manager_name', 'address',
        'website', 'media', 'email', 'landline', 'mobile_phone', 'commercial_record', 'created_at', 'updated_at'
    ];
}
