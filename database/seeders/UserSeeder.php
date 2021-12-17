<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ageng Hermawan',
            'email' => 'agenghermawan16@gmail.com',
            'password' => \Hash::make('irwansyah123'),
            'role_pengguna' =>'Admin'
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user123@gmail.com',
            'password' => \Hash::make('irwansyah123'),
            'role_pengguna' =>'Pengguna'
        ]);
        User::create([
            'name' => 'dokter',
            'email' => 'dokter@gmail.com',
            'password' => \Hash::make('irwansyah123'),
            'role_pengguna' =>'Dokter'
        ]);
        Dokter::create([
            'user_id' => '3',
            'rumahsakit_id' => '1',
            'fullname' => 'Dr Dokter',
            'telp' => '08976122323',
            'alamat' => 'Jl Kecapi Raya',
            'noStr' => '1102318273',
            'email' => 'dokter@gmail.com',
            'kota' => 'Jakarta',
            'deskripsi' => 'Lorem Ipsum',
            'sebagaiDokter' => 'Dokter anak',
            'status' => 'active',
        ]);
    }
}
