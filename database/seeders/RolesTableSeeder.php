<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'nom' => 'admin',
            ],
            [
                'id' => 2,
                'nom' => 'assistant',
            ],
            [
                'id' => 3,
                'name' => 'abonne',
            ],
        ];

        Role::insert($roles);
    }
}
