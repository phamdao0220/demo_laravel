<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->name='phamdao';
        $user->phone='0353275474';
        $user->address='nam dinh';
        $user->email='phamdao@gmail.com';
        $user->birthday='14/11/2002';
        $user->password='1234';
        $user->roles_id='1';
        $user->save();

        $user=new User();
        $user->name='phamdam';
        $user->phone='0353275325';
        $user->address='nam dinh';
        $user->email='phamdam@gmail.com';
        $user->birthday='08/03/2004';
        $user->password='123456';
        $user->roles_id='2';
        $user->save();
    }
}
