<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name='kokaung';
        $user->email='kokaung@gmail.com';
        $user->password=Hash::make ('password@kokaung');
        $user->remember_token=Str::random(6);


        $user->save();
        $user->assignRole('superadmin');


        $user = new User();
        $user->name='kozayar';
        $user->email='kozayar@gmail.com ';
        $user->password=Hash::make ('password@kozayar');
        $user->remember_token=Str::random(6);


        $user->save();
        $user->assignRole('admin');


       $user = new User();
       $user->name='kosan';
       $user->email='kosan@gmail.com ';
       $user->password=Hash::make ('password@kosan');
       $user->remember_token=Str::random(6);

       $user->save();
       $user->assignRole('user');

    }
}
