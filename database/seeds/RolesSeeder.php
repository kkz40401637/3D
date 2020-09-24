<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([

            [
                "id" => 1,
                "name" => 'superadmin',
                "guard_name" => "web"
            ],
            [
                "id" => 2,
                "name" => 'admin',
                "guard_name" => "web"
            ],

            [
                "id" => 3,
                "name" => 'user',
                "guard_name" => "web"
            ],

        ]);
    }
}
