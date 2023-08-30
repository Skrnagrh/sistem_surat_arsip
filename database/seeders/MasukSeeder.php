<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Masuk;


class MasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for seeding
        $masuks = [
            [
                'kodesm' => 'CODE001',
                'user_id' => 1,
                'nama' => 'Sample Name 1',
                'nomor' => '12345',
                'pengirim' => 'Sender 1',
                'tanggal' => '2023-07-19',
                'lamp' => 'Lamp 1',
                'prihal' => 'Prihal 1',
                'alamat' => 'Sample Address 1',
                'keterangan' => 'Sample Keterangan 1',
                'pdf' => 'sample_pdf_1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kodesm' => 'CODE002',
                'user_id' => 1,
                'nama' => 'Sample Name 2',
                'nomor' => '12346',
                'pengirim' => 'Sender 2',
                'tanggal' => '2023-07-20',
                'lamp' => 'Lamp 2',
                'prihal' => 'Prihal 2',
                'alamat' => 'Sample Address 2',
                'keterangan' => 'Sample Keterangan 2',
                'pdf' => 'sample_pdf_2.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kodesm' => 'CODE003',
                'user_id' => 2,
                'nama' => 'Sample Name 3',
                'nomor' => '12347',
                'pengirim' => 'Sender 3',
                'tanggal' => '2023-07-19',
                'lamp' => 'Lamp 3',
                'prihal' => 'Prihal 3',
                'alamat' => 'Sample Address 3',
                'keterangan' => 'Sample Keterangan 3',
                'pdf' => 'sample_pdf_3.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kodesm' => 'CODE004',
                'user_id' => 2,
                'nama' => 'Sample Name 4',
                'nomor' => '12348',
                'pengirim' => 'Sender 4',
                'tanggal' => '2023-07-20',
                'lamp' => 'Lamp 4',
                'prihal' => 'Prihal 4',
                'alamat' => 'Sample Address 4',
                'keterangan' => 'Sample Keterangan 4',
                'pdf' => 'sample_pdf_4.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kodesm' => 'CODE005',
                'user_id' => 3,
                'nama' => 'Sample Name 5',
                'nomor' => '12349',
                'pengirim' => 'Sender 5',
                'tanggal' => '2023-07-19',
                'lamp' => 'Lamp 5',
                'prihal' => 'Prihal 5',
                'alamat' => 'Sample Address 5',
                'keterangan' => 'Sample Keterangan 5',
                'pdf' => 'sample_pdf_5.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kodesm' => 'CODE006',
                'user_id' => 3,
                'nama' => 'Sample Name 6',
                'nomor' => '12350',
                'pengirim' => 'Sender 6',
                'tanggal' => '2023-07-20',
                'lamp' => 'Lamp 6',
                'prihal' => 'Prihal 6',
                'alamat' => 'Sample Address 6',
                'keterangan' => 'Sample Keterangan 6',
                'pdf' => 'sample_pdf_6.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Masuk::insert($masuks);
    }
}
