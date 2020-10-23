<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Dukey',
                'init_invest' => 122100,
                'start_date' => '2021-11-12',
                'remarks' => 'Innovation and creativity'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Chumzky',
                'init_invest' => 1021000,
                'start_date' => '2029-12-21',
                'remarks' => 'Innovation and creativity'
            ]
        ];
        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
