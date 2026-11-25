<?php

namespace Database\Factories;

use App\Models\Rapor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Str;

/**
 * @extends Factory<Rapor>
 */
class RaporFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kelas = fake()->numberBetween(1, 6);
        $semester = fake()->randomElement(['Ganjil', 'Genap']);
        $tahunAwal = 2026 + ($kelas - 1);
        $tahunAkhir = $tahunAwal + 1;

        return [
            'slug' => Str::slug("rapor-kelas-{$kelas}-semester-{$semester}-" . fake()->unique()->numerify('###')),
            'tahun_ajaran' => "{$tahunAwal}/{$tahunAkhir}",
            'kelas' => "Kelas {$kelas}",
            'semester' => $semester,
            'nilai' => fake()->numberBetween(75, 98),
        ];
    }

    /**
     * State untuk mengenerate 12 data rapor berurutan dari Kelas 1 s/d 6 (Ganjil & Genap).
     */
    public function lulusSd(int $tahunMulai = 2026): static
    {
        $urutanRapor = [];

        for ($kelas = 1; $kelas <= 6; $kelas++) {
            $tahun1 = $tahunMulai + ($kelas - 1);
            $tahun2 = $tahun1 + 1;
            $tahunAjaran = "{$tahun1}/{$tahun2}";

            foreach (['Ganjil', 'Genap'] as $semester) {
                $urutanRapor[] = [
                    'slug' => Str::slug("rapor-kelas-{$kelas}-semester-{$semester}-{$tahun1}-{$tahun2}"),
                    'tahun_ajaran' => $tahunAjaran,
                    'kelas' => $kelas,
                    'semester' => $semester,
                ];
            }
        }

        return $this->state(new Sequence(...$urutanRapor));
    }
}