<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=new Category();
        $category->category_name='trinh tham';
        $category->save();

        $category=new Category();
        $category->category_name='ngon tinh';
        $category->save();

        $category=new Category();
        $category->category_name='kinh di';
        $category->save();
    }
}
