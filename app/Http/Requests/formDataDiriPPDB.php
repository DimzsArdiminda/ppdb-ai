<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formDataDiriPPDB extends FormRequest
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
    public function rules()
    {
        return [
            'nama' => 'required',
            'email' => 'required|email',
            'Tempat_lahir' => 'required',
            'Tanggal_Lahir' => 'required|date',
            'alamat' => 'required',
        ];
    }

    // pesan
    public function messages()
    {
        return  [
            'nama.required' => 'Nama lengkap harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'Tempat_lahir.required' => 'Kota/Kab Tempat Lahir harus diisi.',
            'Tanggal_Lahir.required' => 'Tanggal Lahir harus diisi.',
            'Tanggal_Lahir.date' => 'Format tanggal lahir tidak valid.',
            'alamat.required' => 'Alamat harus diisi.',
        ];
    }
}