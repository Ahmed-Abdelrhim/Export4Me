<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Importer extends Model
{
    use HasFactory;

    protected $table = 'importers';
    protected $fillable = [
        'company_name', 'owner_name', 'manager_name', 'address', 'country','website','media','email','landline','mobile_phone','mediamedia',
        'harbor_name','origin','product_description','size','imported_before_value', 'sector','is_agreed_to_import',
        'commercial_record','product_catalog','created_at','updated_at'
        ];
}
