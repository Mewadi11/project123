<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user')->insert([
            'name'=>'mewadi th',
            'email'=>'mewadi@th.com',
            'password'=>Hash::make('123456')
        ]);
    }
}
