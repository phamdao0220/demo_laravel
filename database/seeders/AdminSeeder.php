<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $user= new User();
        $user->name='phamdao';
        $user->email='phamdao@gmail.com';
        $user->phone='0353';
        $user->address='nam dinh';
        $user->birthday='14/11/2002';
        $user->roles_id=1;
        $user->password=Hash::make('12345678');
        $user->save();

        $user= new User();
        $user->name='phamdam';
        $user->email='phamdam@gmail.com';
        $user->phone='03';
        $user->address='nam dinh';
        $user->birthday='11/08/2004';
        $user->roles_id=2;
        $user->password=Hash::make('0987654321');
        $user->save();

        $user= new User();
        $user->name='phamvu';
        $user->email='phamvu@gmail.com';
        $user->phone='27';
        $user->address='nam dinh';
        $user->birthday='14/11/2008';
        $user->roles_id=3;
        $user->password=Hash::make('012345');
        $user->save();

    }
}
