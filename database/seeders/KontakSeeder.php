<?php

namespace Database\Seeders;

use App\Models\kontak;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kontak = [
            [
                'Nama_Kontak' => 'Ivena',
                'Email' => 'Ivena@gmail.com',
                'No_telp' => '082151763434',
                'Ket' => 'Saya Ivena adalah tim berdedikasi yang selalu siap memberikan layanan terbaik kepada Anda. Dengan penuh semangat, kami menyediakan bantuan dan solusi untuk setiap pertanyaan atau kebutuhan Anda.',
            ],
            ];

        foreach ($kontak as $value) {
            kontak::create($value);
        }
    }
}
