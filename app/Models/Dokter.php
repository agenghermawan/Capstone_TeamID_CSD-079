<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Dokter as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class Dokter extends Authenticatable
{
    use HasFactory;
    use TwoFactorAuthenticatable;
    protected $table = 'dokter';
    protected $fillable = [
        'fullname', 'noStr', 'telp','user_id','email','alamat','kota','rumahSakit','sebagaiDokter','status,','deskripsi','photo'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
