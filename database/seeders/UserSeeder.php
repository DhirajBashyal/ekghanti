<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'paras@ekghantiservices.com',
                'password' => bcrypt('p@r@sadmin33'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
