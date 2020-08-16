<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $writer = Role::create([
            'name' => 'writer',
            'display_name' => 'Write new post', // optional
            'description' => 'User is the Writer of new post', // optional
        ]);
        $writer->save();
        
        $editor = Role::create([
            'name' => 'editor',
            'display_name' => 'Edit the posts', // optional
            'description' => 'User is allowed to edit post', // optional
        ]);
        $editor->save();
    }
}
