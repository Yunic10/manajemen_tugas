<?php

namespace Database\Seeders;

use App\Models\Tugas;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Tugas::create([
        'judul' => 'Mengerjakan Laporan',
        'deskripsi' => 'Mengerjakan laporan keuangan bulanan',
        'status' => FALSE,
       ]);
    }
}
