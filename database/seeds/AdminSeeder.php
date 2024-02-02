<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminsData = [
            [
                'name' => 'Admin 1',
                'email' => 'admin1@email.com',
                'username' => 'admin',
                'password' => Hash::make('password'),
            ]
        ];
        foreach ($adminsData as $admin) {
            Admin::firstOrCreate(['email' => $admin['email']], $admin);
        }
    }
}
