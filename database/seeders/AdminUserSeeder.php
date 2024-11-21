<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin Web',
            'email' => 'admin.toko@test.com',
            'password' => Hash::make(12345678),
            'is_active' => 1
        ]);

        $adminWeb = Role::create([
            'name' => 'Admin'
        ]);

        $user->assignRole($adminWeb);
    }
}
