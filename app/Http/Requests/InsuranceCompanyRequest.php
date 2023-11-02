<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsuranceCompanyRequest extends FormRequest
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

            'website' => ['nullable','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            'media' => ['nullable', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'email'],


//            'landline' => ['required', 'size:10' , 'regex:/^02[0-9]{8}$/'],
            // 'landline' => ['required', 'size:10'],
            'landline' => ['required', 'min:7', 'max:12'],
            'phone_number' => ['required','size:11','regex:/^01[0-2|5]{1}[0-9]{8}$/'],

            'commercial_record' => ['nullable', 'image', 'max:4100', 'mimes:jpg,png,jpeg,webp'],
        ];
    }
}
