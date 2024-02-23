<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\database\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username'=>'admin',
                'name'=>'AkunAdmin',
                'email'=>'admin@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('123456')
            ],

            [
                'username'=>'user1',
                'name'=>'AkunUser1',
                'email'=>'user1@gmail.com',
                'level'=>'user1',
                'password'=>Hash::make('123456')
            ],

            [
                'username'=>'user2',
                'name'=>'AkunUser2',
                'email'=>'user2@gmail.com',
                'level'=>'user2',
                'password'=>Hash::make('123456')
            ],
        ];
        foreach($user as $key => $value) {
            User::create($value);
        }
    }
}
