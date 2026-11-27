<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_guru = [
            [
                'name'       => 'Budi Santoso, S.Pd.',
                'nip'        => '198504122010011005', // 18 digit
                'nuptk'      => '1744763664200012',   // 16 digit
                'status'     => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Siti Aminah, M.Pd.',
                'nip'        => '198809232014022003', // 18 digit
                'nuptk'      => '1255766667300045',   // 16 digit
                'status'     => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Ahmad Fauzi, S.Kom.',
                'nip'        => '199011152019031008', // 18 digit
                'nuptk'      => '1447768669130021',   // 16 digit
                'status'     => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Rina Marlina, S.Si.',
                'nip'        => '198207182008012011', // 18 digit
                'nuptk'      => '1050760661300088',   // 16 digit
                'status'     => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Dedi Kurniawan, S.Pd.',
                'nip'        => '199302282022211002', // 18 digit (format PPPK)
                'nuptk'      => '1560771672130034',   // 16 digit
                'status'     => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Guru::insert($data_guru);
    }
}