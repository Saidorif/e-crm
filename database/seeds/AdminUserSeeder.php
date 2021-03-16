<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Saidorif Kadirov',
                'email' => 'sayyid2112@gmail.com',
                'password' => Hash::make('123456'),
                'role_id' => 1,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Javoxir Amanullaev',
                'email' => 'java@mail.ru',
                'password' => Hash::make('java328'),
                'role_id' => 1,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach($admins as $item){
            DB::table('users')->insert($item);
        }
    }
}
