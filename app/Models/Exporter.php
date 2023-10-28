<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exporter extends Model
{
    use HasFactory;

    protected $table = 'exporters';
    protected $fillable = ['company_name', 'owner_name', 'manager_name', 'factory_address',
        'country', 'website', 'media', 'email', 'landline', 'mobile_phone', 'product_name', 'product_description',

        'production_quantity', 'local_selling', 'country_export_to_before', 'country_export_to_before_value',
        'exporter_place', 'shipping_worked_before', 'sector', 'exporter_record', 'export_paper', 'photo_team',

        'commercial_record', 'product_brochure', 'created_at', 'updated_at',
    ];
}
