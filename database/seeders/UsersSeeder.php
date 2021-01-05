<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'PakGuru',
            'role' => 'admin',
            'email' => 'admin@smkbpi.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Denna Mandela',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'denna@smkbpi.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Budi Cahya',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'budi@smkbpi.com',
            'password' => bcrypt('password123')
        ]);
    }
}
