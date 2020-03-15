<?php

use Illuminate\Database\Seeder;

class UserAdminDevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'name' => ('Администратор'),
                'email' => 'admin@admin.ru',
                'email_verified_at' => now(),
                'password' => bcrypt('admin'),
                'remember_token' => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'is_admin' => 1
            ]
        ];

        DB::table('users')->insert($data);
    }
}
