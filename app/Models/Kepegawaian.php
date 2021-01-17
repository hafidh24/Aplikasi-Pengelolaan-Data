<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepegawaian extends Model
{
    protected $table = 'kepegawaian';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Nama',
        'NIK',
        'TTL',
        'Alamat',
        'NPWP',
        'No_HP',
        'Pendidikan',
        'Pendidikan_Terakhir_Pada_Saat_Diangkat',
        'NO_SK_Awal_Pengangkatan',
        'TMT_SK_Awal_Pengangkatan',
        'Berkala_Kenaikan'];
}
 