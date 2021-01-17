<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'NPM',
        'Nama',
        'Pilihan_Prodi',
        'Tempat_Lahir',
        'Tanggal_lahir',
        'Jenis_kelamin',
        'Alamat_lengkap',
        'Kecamatan',
        'Kabupaten',
        'KTP',
        'KK',
        'No_HP'];
}
 