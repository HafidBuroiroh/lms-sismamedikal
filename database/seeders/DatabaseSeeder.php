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
                'name' => 'Superadmin LMS Sismamedikal',
                'email' => 'admindemo@gmail.com',
                'password' => bcrypt('admin12345678'),
                'level' => '1',
                'no_telp' => '1',
            ],[
                'name' => 'test 1 LMS Sismamedikal',
                'email' => 'polijantung@gmail.com',
                'password' => bcrypt('12345678'),
                'level' => '2',
                'no_telp' => '1',
                'id_jabatan'=> 1,
            ],[
                'name' => 'test 2 LMS Sismamedikal',
                'email' => 'pendaftaranpasien@gmail.com',
                'password' => bcrypt('12345678'),
                'level' => '2',
                'no_telp' => '1',
                'id_jabatan' => 2,
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
