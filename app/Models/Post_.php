<?php

namespace App\Models;

class Post  
{
    private static $blog_post = [
        [
            "title" => "Post Pertama",
            "slug"  => "post-pertama",
            "author" => "Hendri S",
            "body"  => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus cumque sit vero blanditiis incidunt deserunt illum. 
                Repellendus, amet debitis consequatur nulla fuga sed hic in? Eveniet optio voluptatum voluptates excepturi! Lorem ipsum, 
                dolor sit amet consectetur adipisicing elit. Voluptatibus cumque sit vero blanditiis incidunt deserunt illum. 
                Repellendus, amet debitis consequatur nulla fuga sed hic in? Eveniet optio voluptatum voluptates excepturi! Lorem ipsum, 
                dolor sit amet consectetur adipisicing elit. Voluptatibus cumque sit vero blanditiis incidunt deserunt illum. 
                Repellendus, amet debitis consequatur nulla fuga sed hic in? Eveniet optio voluptatum voluptates excepturi!"
            ],
            [
            "title" => "Post Kedua",
            "slug"  => "post-kedua",
            "author" => "Azmeera S",
            "body"  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum nihil, 
                et assumenda quidem voluptatibus, quae unde distinctio eum quam quia placeat quaerat corrupti nemo iure! Impedit mollitia, 
                nisi laudantium earum, assumenda ut exercitationem modi eos facilis placeat tenetur fugiat ea a iusto. 
                Laboriosam maxime aliquid unde pariatur impedit debitis quo ratione quisquam eaque odio iusto, dolorum, 
                beatae fuga aut corrupti velit sapiente magnam in voluptatum atque. Ratione error autem, magni veniam labore nesciunt, 
                ex dolores at provident harum iure aut! Odit sequi mollitia nulla voluptatum accusantium aut natus explicabo alias, 
                quis illum voluptas velit nemo commodi aspernatur necessitatibus, omnis magni."
            ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all(); 
        // $post = [];
        // foreach($posts as $p){
        // if($p["slug"] === $slug){
        //     $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);

    }
}


