<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    use HasFactory;
    protected $fillable = [
        'namaObat','golongan','kategori','dikonsumsiOleh','bentukObat'
        ,'anjuranLainnya','photoObat','merkDagang','manfaat','deskripsi','productObat','peringatanObat','dosisdanaturan','interaksi','efekSamping'
    ];
}
