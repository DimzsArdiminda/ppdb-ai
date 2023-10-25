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
        'berkasIjazah' => 'required|file|mimes:pdf|max:1999',
        'berkasFoto' => 'required|mimes:jpg|max:1999', // Ganti 'file' menjadi 'image'
        'berkasPrestasi' => 'mimes:pdf|max:1999',
        'berkasKK' => 'required|file|mimes:pdf|max:1999',
        'berkasKTPOrangTua' => 'required|file|mimes:pdf|max:1999',
    ];
}


    public function messages()
    {
        return [
            'berkasIjazah.required' => 'File scan ijazah harus diunggah.',
            'berkasIjazah.mimes' => 'File scan ijazah harus dalam format PDF.',
            'berkasFoto.required' => 'scan pas berkasFoto harus diunggah.',
            'berkasFoto.mimes' => ' scan pas berkasFoto harus dalam format jpg.',
            'prestasi.mimes' => 'File scan sertifikat prestasi harus dalam format PDF.',
            'berkasKK.required' => 'File scan KK harus diunggah.',
            'berkasKK.mimes' => 'File scan KK harus dalam format PDF.',
            'berkasKTPOrangTua.required' => 'File scan KTP Orang tua harus diunggah.',
            'berkasKTPOrangTua.mimes' => 'File scan KTP Orang tua harus dalam format PDF.',
        ];
    }
}
