<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsultasi extends Model
{
    use HasFactory;
    protected $table = 'konsultasi';
    protected $guarded = [];

    public function jawabankonsultasi(){
       return $this->hasMany(jawabanKonsultasi::class);
    }
}
