<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # ORM 
        $user = new User;
        $user->document = '123456789';
        $user->fullname = 'John Wick';
        $user->gender = 'Male';
        $user->birthdate = '1990-01-01';
        $user->photo = 'images/users/male_1.jpg';
        $user->phone = '3123456789';
        $user->email = 'johnw@mail.com';
        $user->password = bcrypt('123456789');
        $user->role = 'administrator';
        $user->save();

        # Array
        DB::table('users')->insert([
            "document" => '1234567890',
            "fullname" => 'Ramon Wick',
            "gender" => 'Male',
            "birthdate" => '1990-01-02',
            "photo" => 'images/users/male_2.jpg',
            "phone" => '31234567890',
            "email" => 'Ramon@mail.com',
            "password" => bcrypt('123456789'),
            "created_at" => now(), ]);
            }
}