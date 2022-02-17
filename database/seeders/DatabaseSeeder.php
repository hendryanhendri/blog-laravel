<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(50)->create();

        // User::create([
        //     'name' => 'Hendri Sudianto',
        //     'email'=> 'hendri@gmail.com',
        //     'password'=> bcrypt(12345)
        // ]);
        // User::create([
        //     'name' => 'Azmeera Syfadia Ruby',
        //     'email'=> 'ruby@gmail.com',
        //     'password'=> bcrypt(12345)
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit,',
        //     'body'    => '<h4>ipsum dolor sit amet consectetur adipisicing elit. </h4> <b>Aspernatur obcaecati corporis sit perspiciatis </b><p>consequatur porro veritatis praesentium eaque quas ad. At ut illo enim quas quia rem magnam nesciunt quasi!</p>',
        //     'category_id'=> 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit,',
        //     'body'    => '<h4>ipsum dolor sit amet consectetur adipisicing elit. </h4> <b>Aspernatur obcaecati corporis sit perspiciatis </b><p>consequatur porro veritatis praesentium eaque quas ad. At ut illo enim quas quia rem magnam nesciunt quasi!</p>',
        //     'category_id'=> 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit,',
        //     'body'    => '<h4>ipsum dolor sit amet consectetur adipisicing elit. </h4> <b>Aspernatur obcaecati corporis sit perspiciatis </b><p>consequatur porro veritatis praesentium eaque quas ad. At ut illo enim quas quia rem magnam nesciunt quasi!</p>',
        //     'category_id'=> 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit,',
        //     'body'    => '<h4>ipsum dolor sit amet consectetur adipisicing elit. </h4> <b>Aspernatur obcaecati corporis sit perspiciatis </b><p>consequatur porro veritatis praesentium eaque quas ad. At ut illo enim quas quia rem magnam nesciunt quasi!</p>',
        //     'category_id'=> 2,
        //     'user_id' => 2
        // ]);
    }
}
