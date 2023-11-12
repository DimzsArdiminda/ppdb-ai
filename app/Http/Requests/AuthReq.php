<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthReq extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'tanggal_lahir' => 'date|required|before:today',
            'no_hp' => 'required|numeric',
            'alamat' => 'required|min:10|max:100',
            'email' => 'required|email|unique:user-web',
        ];
    }

    public function messages(){
    $pesan = [
        'name.required' => 'Nama lengkap harus diisi.',
        'name.min' => 'Nama lengkap minimal 3 karakter.',
        'name.max' => 'Nama lengkap maksimal 50 karakter.',
        'tanggal_lahir.required' => 'Tanggal lahir harus diisi.',
        'tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal.',
        'tanggal_lahir.before' => 'Tanggal lahir tidak boleh lebih dari hari ini.',
        'no_hp.required' => 'Nomor HP harus diisi.',
        'no_hp.numeric' => 'Nomor HP harus berupa angka.',
        'alamat.required' => 'Alamat harus diisi.',
        'alamat.min' => 'Alamat minimal 10 karakter.',
        'alamat.max' => 'Alamat maksimal 100 karakter.',
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Email tidak valid.',
        'email.unique' => 'Email sudah terdaftar.',

    ];
    return $pesan;
    }
}
