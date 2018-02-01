<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?,?,?)',
                    [
                    'Blog post',
                    '<p>Текст в произвольной форме для теста базы данных, таблицы и ПДО</p>',
                    'pict.jpg'
                    ]);

        Article::create([
                'name'=>'Samope blog post',
                'text'=>'Hello world',
                'img'=>'pic4.jpg'
        ]);
    }
}
