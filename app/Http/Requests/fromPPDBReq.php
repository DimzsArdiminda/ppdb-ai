<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fromPPDBReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'nisn' => 'required',
            'asal_sekolah' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jurusan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
