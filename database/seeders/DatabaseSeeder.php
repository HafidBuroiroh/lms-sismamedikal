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
                'email' => 'admindemo@gmail.com',
                'password' => bcrypt('admin12345678'),
                'level' => '1',
            ],
            [
                'name' => 'Superadmin LMS Sismamedikal',
                'email' => 'suadmin@lms-medika.id',
                'password' => bcrypt('suadmin123'),
                'level' => '99',
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
