<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawabanKonsultasi extends Model
{
    use HasFactory;
    protected $table = 'jawabankonsultasi';

    protected $guarded = [];
    public function konsultasi(){
      return $this->belongsTo(konsultasi::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
