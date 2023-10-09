<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fromUploadFilePPDB extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Ijazah' => 'required|file|mimes:pdf|max:3000',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:3000',
            'prestasi' => 'file|mimes:pdf|max:3000',
            'KK' => 'required|file|mimes:pdf|max:3000',
            'KTP' => 'required|file|mimes:pdf|max:3000',
        ];
    }
}
