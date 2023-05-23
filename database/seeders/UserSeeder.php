<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email','admin@admin.com')->first();
        if(is_null($user)){
            $user = new User();
            $user->name = 'Admin';
            $user->email = 'admin@admin.com';
            $user->password = Hash::make('12345678');
            $user->save();
        }
    }
}
