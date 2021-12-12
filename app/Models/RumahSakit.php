<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;
    protected $table = 'rumahsakit';
    protected $fillable = [
        'nama' , 'alamat', 'tentang', 'notelp' ,'lokasiGmaps', 'jamOperasional', 'provinsi' ,'kodepos' ,'kota' ,'fasilitas','poliklinik','photo',
    ];
    protected $casts = [
        'fasilitas' => 'array',
        'poliklinik' => 'array'
    ];

/*    public function getphotoAttribute($value)
    {
        return url('storage/'. $value);
    }*/

    public function user(){
        $this->hasMany(User::class);
    }
    public function poliklinik(){
        $this->hasMany(Poliklinik::class);
    }
}
