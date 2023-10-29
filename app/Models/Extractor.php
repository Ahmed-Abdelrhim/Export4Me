<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extractor extends Model
{
    use HasFactory;

    protected $table = 'extractors';
    protected $fillable = ['company_name', 'owner_name', 'manager_name', 'address',
        'website','media','email','landline','mobile_phone',
        'shipping_types','harbor_type','clearance_type',
        'commercial_record','license','created_at','updated_at',
    ];
}
