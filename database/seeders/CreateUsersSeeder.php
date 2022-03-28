<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
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
                'name'=>'Admin',
                'email'=>'admin@admin',
                'is_admin'=>'1',
                'password'=> bcrypt('admin'),
            ],
            [
                'name'=>'User',
                'email'=>'demo@demo',
                'is_admin'=>'0',
                'password'=> bcrypt('demo'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
