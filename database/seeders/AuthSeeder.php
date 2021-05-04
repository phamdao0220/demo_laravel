<?php

namespace Database\Seeders;

use App\Models\Auth;
use Illuminate\Database\Seeder;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auth=new Auth();
        $auth->auth_name='Trinh Van A';
        $auth->save();

        $auth=new Auth();
        $auth->auth_name='Trinh Van B';
        $auth->save();

        $auth=new Auth();
        $auth->auth_name='Trinh Van C';
        $auth->save();
    }
}
