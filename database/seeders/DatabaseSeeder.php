<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Enums\UserStatus;
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
        ];

        Section::factory()->createMany($defaultSections);

        $demoSection = Section::query()->where('name', 'DEMO')->firstOrFail();

        User::factory()->createMany([
            [
                'name' => 'test',
                'surname' => 'admin',
                'email' => 'testadmin@example.com',
                'section_id' => $demoSection->id,
                'role' => Role::ADMIN->value,
                'status' => UserStatus::ACTIVE->value, ],
            [
                'name' => 'test',
                'surname' => 'voter',
                'email' => 'testvoter@example.com',
                'section_id' => $demoSection->id,
                'role' => Role::VOTER->value,
                'status' => UserStatus::ACTIVE->value,
            ],
        ]);
    }
}
