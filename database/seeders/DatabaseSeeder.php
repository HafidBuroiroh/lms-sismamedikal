<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin LMS Sismamedikal',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'level' => '1',
            ],
            [
                'name' => 'Superadmin LMS Sismamedikal',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('12345678'),
                'level' => '99',
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
