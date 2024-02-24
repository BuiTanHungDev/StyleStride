<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('hungnlk2002@'),
                'photo'=>"",
                'phone'=>'123456789',
                'role'=>'admin',
                'address'=>'Quảng Ngãi',
                'status'=>'active',
                
            ],
            [
                'name'=>'Manager',
                'email'=>'manager@gmail.com',
                'password'=>Hash::make('hungnlk2002@'),
                'photo'=>"",
                'phone'=>'123456789',
                'role'=>'manager',
                'address'=>'Quảng Ngãi',
                'status'=>'active',
               
            ],
            [
                'name'=>'Employee',
                'email'=>'employee@gmail.com',
                'password'=>Hash::make('hungnlk2002@'),
                'photo'=>"",
                'phone'=>'123456789',
                'role'=>'employee',
                'address'=>'Quảng Ngãi',
                'status'=>'active',
                
            ],[
                'name'=>'Supplier',
                'email'=>'supplier@gmail.com',
                'password'=>Hash::make('hungnlk2002@'),
                'photo'=>"",
                'phone'=>'123456789',
                'role'=>'supplier',
                'address'=>'Quảng Ngãi',
                'status'=>'active',
              
            ],[
                'name'=>'user1',
                'email'=>'user1@gmail.com',
                'password'=>Hash::make('hungnlk2002@'),
                'photo'=>"",
                'phone'=>'123456789',
                'role'=>'user',
                'address'=>'Quảng Ngãi',
                'status'=>'active',
               
            ]

        ]

        );
    }
}
