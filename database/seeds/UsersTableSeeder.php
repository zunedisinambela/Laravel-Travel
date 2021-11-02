<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('admin123'),
                'roles' => 'ADMIN',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@user.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('user123'),
                'roles' => 'USER',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        \App\User::insert($users);
    }
}
