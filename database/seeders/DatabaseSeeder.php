<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        \App\Models\User::factory()->create([
        'name' => 'Admin',
        'username' => 'Admin',
        'email' => 'Admin@gmail.com',
        'role_id' => Role::where('name', 'admin')->first('id'),
        ]);
    }
}
