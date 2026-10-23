<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\User;
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

        $defaultSections = [
            ['name' => 'DEMO'],
            ['name' => 'GLOBAL'],
            ['name' => 'PENDING'],
        ];

        Section::factory()->createMany($defaultSections);

        $demoSection = Section::query()->where('name', 'DEMO')->firstOrFail();

        User::factory()->create([
            'name' => 'Test',
            'surname' => 'User',
            'email' => 'test@example.com',
            'section_id' => $demoSection->id,
        ]);
    }
}
