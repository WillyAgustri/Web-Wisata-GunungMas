<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username' => 'Admin',
                'password' => bcrypt('admin'),
            ],
            [
                'username' => 'user',
                'password' => bcrypt('user'),
            ],
            ];

        foreach ($user as $key => $value) {
            admin::create($value);
        }
    }
}