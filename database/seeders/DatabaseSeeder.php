<?php

namespace Database\Seeders;

use App\Http\Services\ProductService;
use App\Http\Services\BookService;
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
        $this->call(ProductSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AuthSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
