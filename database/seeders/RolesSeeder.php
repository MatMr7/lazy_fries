<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::query()->firstOrCreate([
            'id' => Role::FACTORY_ADMIN
        ], [
            'name' => 'Factory admin'
        ]);

        Role::query()->firstOrCreate([
            'id' => Role::MANAGER
        ], [
            'name' => 'Manager'
        ]);

        Role::query()->firstOrCreate([
            'id' => Role::DRIVER
        ], [
            'name' => 'Driver'
        ]);

        Role::query()->firstOrCreate([
            'id' => Role::FACTORY_EMPLOYEE
        ], [
            'name' => 'Factory employee'
        ]);

        Role::query()->firstOrCreate([
            'id' => Role::SHIPPING_EMPLOYEE
        ], [
            'name' => 'Shipping employee'
        ]);

        Role::query()->firstOrCreate([
            'id' => Role::SHIPPING_ADMIN
        ], [
            'name' => 'Shipping admin'
        ]);
    }
}
