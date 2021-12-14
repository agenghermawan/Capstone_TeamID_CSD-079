<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    protected $fillable = [
        'fullname', 'noStr', 'telp','user_id','email','alamat','kota','rumahsakit_id','sebagaiDokter','status,','deskripsi','photo','pengalamanPraktik','riwayatPendidikan'
    ];

    protected $casts = [
        'pengalamanPraktik' => 'array',
        'riwayatPendidikan' => 'array',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
