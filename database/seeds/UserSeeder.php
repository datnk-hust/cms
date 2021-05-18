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
        //
        DB::table('users')->insert([
            'UserName' => "Admin",
            'UserEmail' => 'admin@telemed.vn',
            'UserPassword' => Hash::make('123456'),
            'UserId'=> 'admin',
            'UserRule' => 1,
            'UserStatus' => 1
        ]);
    }
}
