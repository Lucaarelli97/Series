<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
        $usuario = User::create([
            'name'=>'Aitor',
            'email'=> 'toorasturian@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('aitor')
        ]);

        $usuario->assignRole('admin');
        
        $roles = Role::all();

        for($i=1; $i<10;){
            $rolename= $roles->random()->name;
            if($rolename!="admin"){
                User::factory()->create()->assignRole($rolename);
                $i++;
            }
        }
    }
}