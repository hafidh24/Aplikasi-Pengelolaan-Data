<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'NIK';
    protected $fillable = [
        'NIK',
        'NIDN_NUP',
        'Nama_Dosen',
        'Jabatan_Akademik',
        'Pendidikan',
        'Sertifikasi',
        'Program_Studi',
        'Status'];
}
 