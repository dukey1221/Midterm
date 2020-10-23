<?php

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
        $data = [
            [
                'lname' => 'Genita',
                'fname' => 'Ruben Nestor',
                'address' => 'Inabanga, Bohol',
                'phone' => '09192298966',
                'email' => 'rubenestor816@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname' => 'Satentes',
                'fname' => 'Sophia',
                'address' => 'Panglao, Bohol',
                'phone' => '09512397161',
                'email' => 'soffy@gmail.com',
                'password' => bcrypt('password1234')
            ]
        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
