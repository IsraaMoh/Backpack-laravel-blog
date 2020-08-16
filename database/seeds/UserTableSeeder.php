<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;
use \Database\Seeder\LaratrustSeeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_a=\App\User::create([
            'name' =>'admin_A',
            'email' =>'esraamohmmad2@gmail.com',
            'password' => bcrypt('secret'),
            'role'=>'writer'

        ]);

        $admin_b=\App\User::create([
            'name' =>'admin_B',
            'email' =>'israaamin844@gmail.com',
            'password' => bcrypt('secret'),
            'role'=>'editor'

        ]);
        // attach role to the user
        //$admin_a->attachRole('writer');
        //$admin_b->attachRole('editor');

        //attach permissions to user 
       // $admin_a->attachPermissions(['posts-create', 'posts-read']);
        //$admin_b->attachPermissions(['posts-update', 'posts-read']);
    }
}
