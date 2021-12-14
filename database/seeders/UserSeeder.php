<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use   App\Models\User;
use Spatie\Permission\Models\Role;

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
        $role = Role::create(['name' => 'admin']); 

         User::create([
            'name'=>'Jherry Ponce Graos',
            'email'=>'jponce@unitru.edu.pe',
            'password'=>bcrypt('75959881') 
        ]); 

        User::create([
            'name'=>'Jherry Ponce Graos',
            'email'=>'jherry_libra23@hotmail.com',
            'password'=>bcrypt('75959881') 
        ])->assignRole('admin');

        User::create([
            'name'=>'Diana Orozco Graos',
            'email'=>'lissi_2607@hotmail.com',
            'password'=>bcrypt('75959881') 
        ])->assignRole('admin');
    }
}
