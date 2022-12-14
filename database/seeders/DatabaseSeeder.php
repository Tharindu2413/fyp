<?php

namespace Database\Seeders;

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
        $this->call(PermissionTableSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BloodTypeSeeder::class);
        $this->call(HospitalSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(BloodStockSeeder::class);
        $this->call(RequestSeeder::class);
    }
}
