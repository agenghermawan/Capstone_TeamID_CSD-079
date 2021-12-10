<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penyakit extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = 'penyakit';
    protected $fillable = [
        'namaPenyakit','isiPenyakit','deskripsiPenyakit','photoPenyakit','ditulisOleh'
    ];

        public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(368);
    }
}
