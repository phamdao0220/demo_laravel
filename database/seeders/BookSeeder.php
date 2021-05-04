<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book=new Book();
        $book->name='books_1';
        $book->img='https://img.thuthuatphanmem.vn/uploads/2018/10/04/hinh-anh-ly-cafe-nguyen-chat_110731439.jpeg';
        $book->desc='dep';
        $book->category_id='trinh tham';
        $book->auth_id='pham van b';
        $book->status_id='moi nhat';
        $book->save();

        $book=new Book();
        $book->name='books_2';
        $book->img='https://i.pinimg.com/originals/90/1e/16/901e16ff8b5d1fb9f5cf1af3641742c7.jpg';
        $book->desc='ngon';
        $book->category_id='ngon tinh';
        $book->auth_id='nguyen van c';
        $book->status_id='cu';
        $book->save();
    }
}
