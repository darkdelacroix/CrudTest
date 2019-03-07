<?php

use Illuminate\Database\Seeder;


use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->nombre_completo='Usuario prueba';
        $user->dni='12345678C';
        $user->telefono='965412344';
        $user->save();
        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->nombre_completo='Alejandro Rodriguez';
        $user->dni='00000001';
        $user->telefono='965412344';
        $user->save();
        $user->roles()->attach($role_admin);
    }
}