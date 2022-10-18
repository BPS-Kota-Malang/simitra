<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'foto' => 'required'
        ];
    }
}
