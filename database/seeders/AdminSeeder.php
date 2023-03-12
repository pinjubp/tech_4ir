<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
            'usertype' => 'admin',
            
        ]);
        Admin::create([
            'name' => 'operator',
            'email' => 'operator@gmail.com',
            'password' => Hash::make('operator1234'),
            'usertype' => 'operator',
            
        ]);
    }
}
