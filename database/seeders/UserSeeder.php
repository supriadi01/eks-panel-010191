<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
             //Super Admin
        [
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
        ],
        [
            'name'=>'Greg AB',
            'email'=>'greg@halsel.go.id',
            'password'=>Hash::make('*Greg123456#'),
        ],
        [
            'name'=>'Supriadi HL',
            'email'=>'supriadi.hl01@gmail.com',
            'password'=>Hash::make('kostbandung37'),
        ],
    ]);
        
    }
}
