<?php

namespace Database\Seeders;

use App\Models\Departemen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departemen::create([
            'nama_departemen' => 'HRD',
        ]);
        Departemen::create([
            'nama_departemen' => 'PR',
        ]);
        Departemen::create([
            'nama_departemen' => 'Media & Komunikasi',
        ]);
        Departemen::create([
            'nama_departemen' => 'Edukasi',
        ]);
    }
}
