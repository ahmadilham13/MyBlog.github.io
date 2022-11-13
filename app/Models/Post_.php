<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
   private static $blog_post = [
    [
    "title" => "Judul Post Pertama",
    "slug" => "judul-post-pertama",
    "author" => "Ahmad Ilham",
    "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur dolorum repudiandae consequuntur pariatur itaque molestias dolorem corrupti vel officiis molestiae aliquid laudantium nulla odio, consectetur eos doloribus, tenetur nisi praesentium? Sunt aspernatur est facere quo labore, esse inventore sit ipsa soluta magnam unde, neque saepe dolorum tempora ea! Minima provident, alias mollitia dolore et sed numquam quam dolorem atque eaque accusamus delectus vero error quia rem similique in animi. Quos, animi assumenda expedita modi nemo odit velit excepturi nesciunt mollitia."
    ],
    [
    "title" => "Judul Post Kedua",
    "slug" => "judul-post-kedua",
    "author" => "Joko Widodo",
    "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet nostrum numquam quae officiis consequatur fugit, explicabo sequi, unde laborum dolorum, quidem illum non ad omnis dicta vero at aspernatur ducimus eius quaerat quia. Molestiae dolore fugiat incidunt rerum, aperiam, sed facere, et id velit sint atque! Aut nesciunt laborum, sunt amet sint atque quibusdam maiores illo dignissimos quam aliquid neque excepturi tenetur? Rerum laudantium error vero nostrum, suscipit quam rem quo similique harum, dolorem aliquam fugit facilis molestiae neque nihil necessitatibus quaerat veritatis officia adipisci corrupti libero. Corporis velit quasi dolore adipisci aliquam ipsum saepe rem, iste explicabo aliquid quisquam?"
    ]
];

public static function all() {
    return collect(self::$blog_post);
}
public static function find($slug) {
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
}
}
