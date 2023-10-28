<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;
class ExporterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company_name' => ['required', 'string', 'min:5', 'max:255'],
            'owner_name' => ['required', 'string', 'min:5', 'max:255'],
            'manager_name' => ['required', 'string', 'min:5', 'max:255'],
            'factory_address' => ['required', 'string', 'min:5', 'max:255'],
            'country' => ['required', 'string', 'min:2', 'max:255'],

            'website' => ['nullable','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],

            'media' => ['nullable', 'string', 'min:2', 'max:255'],

            'email' => ['required', 'email'],

            'landline' => ['required', 'size:10' , 'regex:/^02[0-9]{8}$/'],
            'phone_number' => ['required','size:11','regex:/^01[0-2|5]{1}[0-9]{8}$/'],

            'product_name' => ['required', 'string' , 'min:5', 'max:255'],
            'product_description' =>  ['nullable', 'string' ],
            'production_quantity' => ['nullable', 'numeric' ],

            'local_selling' => ['nullable', 'string' , 'min:2', 'max:255'],
            'country_export_to_before' => ['nullable', 'string' , 'min:2', 'max:255'],
            'country_export_to_before_value' => ['nullable', 'string' , 'min:2', 'max:255'],

            'exporter_place' => ['required', 'string' , 'min:2', 'max:255'],
            'shipping_worked_before' => ['nullable', 'string' , 'min:10', 'max:255'],

            'sector' => ['nullable'],
            'exporter_record' => ['required', 'in:1,2'],
            'export_paper' => ['required', 'in:1,2'],
            'photo_team' => ['required', 'in:1,2'],

            'commercial_record' => ['nullable', 'image', 'max:4100', 'mimes:jpg,png,jpeg,webp'],
            'product_brochure'  => ['nullable', 'image', 'max:4100', 'mimes:jpg,png,jpeg,webp'],
        ];
    }


}
