<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(["name"=> "admin"]);
        $leaderRole = Role::create(["name"=> "leader"]);
        $agentRole = Role::create(["name"=> "agent"]);
        $customerRole = Role::create(["name"=> "customer"]);
        $user = User::create([
            "name"=> "Team tedja",
            "email"=> "team@tedja.com",
            "phone" => "0812345678",
            "photo" => "angga.png",
            "password" => bcrypt("123123123"),
        ]);

        $user->assignRole($adminRole);
    }
}
