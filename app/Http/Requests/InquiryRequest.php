<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'          => ['required', 'string', 'min:2', 'max:100', 'regex:/^[\p{L}\s\'-]+$/u'],
            'email'         => ['required', 'email:rfc,dns', 'max:255'],
            'phone'         => ['required', 'regex:/^[6-9]\d{9}$/'], // Indian mobile numbers only
            'city'          => ['required', 'string', 'in:Jaipur,Kota,Mumbai,Udaipur,Ajmer,Jodhpur,Other'],
            'budget_range'  => ['required', 'string', 'in:Under 30L,30L-60L,60L-1Cr,1Cr-2Cr,Above 2Cr'],
            'property_type' => ['required', 'string', 'in:Residential Flat,Independent House,Plot,Villa,Commercial Space'],
            'message'       => ['required', 'string', 'min:20', 'max:1000'],
            'website'       => ['nullable', 'max:0'], // Honeypot
        ];
    }

    public function messages(): array
    {
        return [
            'phone.regex'  => 'Enter a valid 10-digit Indian mobile number starting with 6, 7, 8, or 9.',
            'name.regex'   => 'Name should only contain letters, spaces, hyphens, or apostrophes.',
            'email.email'  => 'Enter a valid email address.',
            'message.min'  => 'Please describe your requirement in at least 20 characters.',
            'city.in'      => 'Select a valid city from the list.',
        ];
    }

    // Sanitize before validation
    protected function prepareForValidation(): void
    {
        $this->merge([
            'name'    => strip_tags(trim($this->name ?? '')),
            'message' => strip_tags(trim($this->message ?? '')),
            'phone'   => preg_replace('/\s+/', '', $this->phone ?? ''),
        ]);
    }
}
