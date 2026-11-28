<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Rapor;
use App\Models\User;
use Database\Seeders\GuruSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([GuruSeeder::class]);
        
        Rapor::factory()->recycle(
            Guru::all()
        )->count(12)->lulusSd()->create();
    }
}
