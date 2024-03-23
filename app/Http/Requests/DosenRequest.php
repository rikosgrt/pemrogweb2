<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class DosenRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    return [
        'nid' => [
            'required',
            'max:15',
        ],
        'nama_dosen' => [
            'required',
            'max:255',
        ],
        'alamat_dosen' => [
            'required',
            'max:255',
        ],
        'nomor_telepon' => [
            'required',
        ],
        'email_dosen' => [
            'required',
            'email',
        ],
        'tempat_lahir' => [
            'required',
        ],
        'tanggal_lahir' => [
            'required',
        ],
        'jenis_kelamin' => [
            'required',
        ],
    ];
}
}
