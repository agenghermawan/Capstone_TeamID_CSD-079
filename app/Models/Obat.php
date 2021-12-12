<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    use HasFactory;
    protected $fillable = [
        'namaObat','golongan','kategori','bentukObat'
        ,'photoObat','merkDagang','manfaat','deskripsi','productObat','dosisdanaturan','interaksi','efekSamping'
    ];

    public function kategoriObat(){
        $this->belongsTo(KategoriObat::class,'kategori','id');
    }
}
