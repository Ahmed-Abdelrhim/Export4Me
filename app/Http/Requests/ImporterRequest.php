<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImporterRequest extends FormRequest
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
            'address' => ['required', 'string', 'min:5', 'max:255'],
            'country' => ['required', 'string', 'min:2', 'max:255'],

            'website' => ['nullable','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            'media' => ['nullable', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'email'],


//            'landline' => ['required', 'size:10' , 'regex:/^02[0-9]{8}$/'],
            // 'landline' => ['required', 'size:10'],
            'landline' => ['required', 'min:7', 'max:12'],

            'phone_number' => ['required','size:11','regex:/^01[0-2|5]{1}[0-9]{8}$/'],



            'product_name' => ['required', 'string' , 'min:5', 'max:255'],
            'harbor_name' => ['required', 'string' , 'min:5', 'max:255'],

            'origin' => ['nullable', 'string' , 'min:5', 'max:255'],
            'product_description' =>  ['required', 'string', 'min:5', 'max:1000'],


            'size' => ['required', 'string'],
            'imported_before_value' => ['nullable', 'string' ],


            'sector' => ['nullable'],
            'is_agreed_to_import' => ['required', 'in:1,2'],



            'commercial_record' => ['nullable', 'image', 'max:4100', 'mimes:jpg,png,jpeg,webp'],
            'product_catalog'  => ['nullable', 'image', 'max:4100', 'mimes:jpg,png,jpeg,webp'],
        ];
    }
}
