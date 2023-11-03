<?php

namespace App;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Syahnan Azahra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse rem et dolore sint, dolorem unde, amet pariatur adipisci excepturi facilis, inventore cumque error. Aliquid, nisi doloremque corrupti esse laboriosam ea hic nostrum dolore iusto aperiam, officia, voluptate laudantium beatae placeat autem fugit alias asperiores voluptates id voluptatum. Corporis omnis consectetur iusto temporibus sed corrupti minima a iste, neque sint molestias distinctio deleniti aperiam ut nulla aliquam facilis totam exercitationem doloremque delectus optio? Ad fugiat quis quia quasi, voluptates laborum enim."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "AlBarra Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse rem et dolore sint, dolorem unde, amet pariatur adipisci excepturi facilis, inventore cumque error. Aliquid, nisi doloremque corrupti esse laboriosam ea hic nostrum dolore iusto aperiam, officia, voluptate laudantium beatae placeat autem fugit alias asperiores voluptates id voluptatum. Corporis omnis consectetur iusto temporibus sed corrupti minima a iste, neque sint molestias distinctio deleniti aperiam ut nulla aliquam facilis totam exercitationem doloremque delectus optio? Ad fugiat quis quia quasi, voluptates laborum enim."
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] == $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
