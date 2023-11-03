<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ContactUsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'contact_name' => ['required', 'string', 'min:5', 'max:200'],
            'contact_email' => ['required', 'email'],
            'contact_phone' => ['required','size:11', 'regex:/^01[0-2|5]{1}[0-9]{8}$/'],
            'contact_message' => ['required', 'string', 'min:5', 'max:300'],
        ];
    }
}