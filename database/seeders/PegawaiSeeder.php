<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'name' => 'TesPegawai',
            'email' => 'tes@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('tes123'),
            'departemen_id' => 1,
            'jabatan_id' => 1
        ]);

        Pegawai::factory()->count(50)->create();
    }
}
