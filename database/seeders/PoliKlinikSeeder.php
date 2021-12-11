<?php

namespace Database\Seeders;

use App\Models\Poliklinik;
use Illuminate\Database\Seeder;

class PoliKlinikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Poliklinik::create([
            'nama' => 'Poli Anak',
            'deskripsi' => 'Poli untuk menyembuhkan balita',
            'tindakanmedis' => 'Mengihalngkan Pilek pada balita'
        ]);
    }
}
