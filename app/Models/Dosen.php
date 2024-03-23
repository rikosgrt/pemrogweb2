<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosens';
    protected $fillable = [
        'nid',
        'nama_dosen',
        'alamat_dosen',
        'nomor_telepon',
        'email_dosen',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
    ];
}
