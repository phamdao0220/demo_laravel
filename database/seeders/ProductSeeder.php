<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=new Product();
//        $product->id=1;
        $product->name='product_1';
        $product->address='hanoi';
        $product->phone='0987654321';
        $product->avatar='https://vnplace.com.vn/datafiles/1592846369_nh-ca-phe-dai-dien.jpg';
        $product->save();


        $product=new Product();
//        $product->id=2;
        $product->name='product_2';
        $product->address='namdinh';
        $product->phone='123456789';
        $product->avatar='https://images.foody.vn/res/g10/94384/prof/s576x330/foody-mobile-anh-cf-jpg-304-636218175290183848.jpg';
        $product->save();


        $product=new Product();
//        $product->id=3;
        $product->name='product_3';
        $product->address='hungyen';
        $product->phone='0613478379';
        $product->avatar='https://media-cdn.tripadvisor.com/media/photo-s/0e/04/5c/aa/coffee-art.jpg';
        $product->save();

    }
}
