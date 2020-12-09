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
    public function run(){
        $user = new User();
        $user->name='kokaung';
        $user->email='kokaung@gmail.com';
        $user->password=Hash::make ('password@kokaung');
        $user->remember_token=Str::random(6);


        $user->save();
        $user->assignRole('superadmin');


        $user = new User();
        $user->name='kozayar';
        $user->email='kozayar@gmail.com';
        $user->password=Hash::make ('password@kozayar');
        $user->remember_token=Str::random(6);


        $user->save();
        $user->assignRole('admin');


       $user = new User();
       $user->name='kosan';
       $user->email='kosan@gmail.com ';
       $user->user_id='2';
       $user->password=Hash::make ('password@kosan');
       $user->remember_token=Str::random(6);

       $user->save();
       $user->assignRole('user');


        $user = new User();
           $user->name='kosan';
           $user->email='kosan1@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan3@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan4@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 


        $user = new User();
           $user->name='kosan';
           $user->email='kosan5@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan6@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan7@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan8@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user');
           
        $user = new User();
           $user->name='kosan';
           $user->email='kosan9@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan10@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan11@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan12@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan13@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan14@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan15@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 

        $user = new User();
           $user->name='kosan';
           $user->email='kosan16@gmail.com ';
           $user->user_id='2';
           $user->password=Hash::make ('password@kosan');
           $user->remember_token=Str::random(6);

           $user->save();
           $user->assignRole('user'); 
    }
}
