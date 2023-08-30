<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keluar;

class KeluarSeeder extends Seeder
{
    public function run()
    {
        Keluar::create([
            'kodesk' => 'CODE001',
            'user_id' => 1,
            'nama' => 'Pengirim 1',
            'nomor' => 'K-123',
            'tujuan' => 'Example 1',
            'tanggal' => '2023-07-19',
            'lamp' => 'Lamp 1',
            'prihal' => 'Example 1',
            'alamat' => 'Example 1',
            'keterangan' => 'Example 1',
            'pdf' => 'example1.pdf',
        ]);
        Keluar::create([
            'kodesk' => 'CODE002',
            'user_id' => 1,
            'nama' => 'Pengirim 2',
            'nomor' => 'K-1234',
            'tujuan' => 'Example 2',
            'tanggal' => '2023-07-19',
            'lamp' => 'Lamp 2',
            'prihal' => 'Example 2',
            'alamat' => 'Example 2',
            'keterangan' => 'Example 2',
            'pdf' => 'example2.pdf',
        ]);
        Keluar::create([
            'kodesk' => 'CODE003',
            'user_id' => 2,
            'nama' => 'Pengirim 3',
            'nomor' => 'K-1235',
            'tujuan' => 'Example 3',
            'tanggal' => '2023-07-19',
            'lamp' => 'Lamp 3',
            'prihal' => 'Example 3',
            'alamat' => 'Example 3',
            'keterangan' => 'Example 3',
            'pdf' => 'example3.pdf',
        ]);
        Keluar::create([
            'kodesk' => 'CODE004',
            'user_id' => 2,
            'nama' => 'Pengirim 4',
            'nomor' => 'K-1236',
            'tujuan' => 'Example 4',
            'tanggal' => '2023-07-19',
            'lamp' => 'Lamp 4',
            'prihal' => 'Example 4',
            'alamat' => 'Example 4',
            'keterangan' => 'Example 4',
            'pdf' => 'example4.pdf',
        ]);
        Keluar::create([
            'kodesk' => 'CODE005',
            'user_id' => 3,
            'nama' => 'Pengirim 5',
            'nomor' => 'K-1237',
            'tujuan' => 'Example 5',
            'tanggal' => '2023-07-19',
            'lamp' => 'Lamp 5',
            'prihal' => 'Example 5',
            'alamat' => 'Example 5',
            'keterangan' => 'Example 5',
            'pdf' => 'example5.pdf',
        ]);
        Keluar::create([
            'kodesk' => 'CODE006',
            'user_id' => 3,
            'nama' => 'Pengirim 6',
            'nomor' => 'K-1238',
            'tujuan' => 'Example 6',
            'tanggal' => '2023-07-19',
            'lamp' => 'Lamp 6',
            'prihal' => 'Example 6',
            'alamat' => 'Example 6',
            'keterangan' => 'Example 6',
            'pdf' => 'example6.pdf',
        ]);
    }
}

