<?php

namespace Database\Seeders;

use App\Models\Absensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Absensi::create([
            'tanggal' => now(),
            'pegawai_id' => 1,
            'kehadiran' => 'Hadir'
        ]);
        Absensi::create([
            'tanggal' => now(),
            'pegawai_id' => 2,
            'kehadiran' => 'Sakit'
        ]);
        Absensi::create([
            'tanggal' => now(),
            'pegawai_id' => 3,
            'kehadiran' => 'Izin'
        ]);
        Absensi::create([
            'tanggal' => now(),
            'pegawai_id' => 4,
            'kehadiran' => 'Tanpa Keterangan'
        ]);
    }
}
