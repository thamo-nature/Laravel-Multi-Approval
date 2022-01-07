<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->save();

        $technical = new Role();
        $technical->name = 'technical';
        $technical->save();

        $sales = new Role();
        $sales->name = 'sales';
        $sales->save();

    }
}
