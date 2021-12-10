<?php

namespace App\Http\Controllers\Backend;

use App\Models\Penyakit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageUploadController extends Controller
{
    public function store(Request $request){
        $penyakit = new Penyakit();
        $penyakit->id = 0;
        $penyakit -> exists = true;
        $image = $penyakit -> addMediaFromRequest('upload')->toMediaCollection('images');
        return response()->json([
            'url' => $image->getUrl('thumb'),
        ]);
    }
}
