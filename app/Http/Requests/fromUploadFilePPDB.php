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
    public function rules()
        {
            return [
                'Ijazah' => 'required|mimes:pdf',
                'foto' => 'required|mimes:jpeg',
                'prestasi' => 'required|mimes:pdf',
                'KK' => 'required|mimes:pdf',
                'KTP-ORANGTUA' => 'required|mimes:pdf',
            ];
        }

        public function messages()
    {
        return [
            'Ijazah.required' => 'File scan Ijazah harus diunggah.',
            'Ijazah.mimes' => 'File scan Ijazah harus dalam format PDF.',
            'foto.required' => 'File scan pas foto harus diunggah.',
            'foto.mimes' => 'File scan pas foto harus dalam format JPEG atau PNG.',
            'prestasi.required' => 'File scan sertifikat prestasi harus diunggah.',
            'prestasi.mimes' => 'File scan sertifikat prestasi harus dalam format PDF.',
            'KK.required' => 'File scan KK harus diunggah.',
            'KK.mimes' => 'File scan KK harus dalam format PDF.',
            'KTP-ORANGTUA.required' => 'File scan KTP Orang tua harus diunggah.',
            'KTP-ORANGTUA.mimes' => 'File scan KTP Orang tua harus dalam format PDF.',
        ];
}


}
