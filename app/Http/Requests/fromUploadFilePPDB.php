<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fromUploadFilePPDB extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
{
    return [
        'Ijazah' => 'required|file|mimes:pdf|max:1999',
        'foto' => 'required|mimes:jpg|max:1999', // Ganti 'file' menjadi 'image'
        'prestasi' => 'mimes:pdf|max:1999',
        'KK' => 'required|file|mimes:pdf|max:1999',
        'KTPORANGTUA' => 'required|file|mimes:pdf|max:1999',
    ];
}


    public function messages()
    {
        return [
            'Ijazah.required' => 'File scan Ijazah harus diunggah.',
            'Ijazah.mimes' => 'File scan Ijazah harus dalam format PDF.',
            'foto.required' => 'File scan pas foto harus diunggah.',
            'foto.mimes' => 'File scan pas foto harus dalam format PDF.',
            'prestasi.mimes' => 'File scan sertifikat prestasi harus dalam format PDF.',
            'KK.required' => 'File scan KK harus diunggah.',
            'KK.mimes' => 'File scan KK harus dalam format PDF.',
            'KTPORANGTUA.required' => 'File scan KTP Orang tua harus diunggah.',
            'KTPORANGTUA.mimes' => 'File scan KTP Orang tua harus dalam format PDF.',
        ];
    }
}
