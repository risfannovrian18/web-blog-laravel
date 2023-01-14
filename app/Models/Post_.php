<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Risfan Novrian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ut laudantium nulla dolorem error aliquid autem, quibusdam odio. Sint dolor repellat dolorem nesciunt magni officia optio aliquid culpa neque saepe iure earum nobis quas voluptate mollitia omnis, corporis tenetur sequi praesentium? In quia distinctio quam nesciunt natus sapiente reprehenderit consequuntur ut officiis debitis repellendus assumenda velit laudantium temporibus, tempore aliquid ipsa deserunt veniam ullam quisquam cupiditate non dolores error? Sequi voluptatibus nostrum, odio dolorum harum fuga debitis voluptatum tempore et."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Vitaloka Ervinayanti Ruswanda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus debitis dicta id repellat, maiores qui incidunt ea pariatur voluptatum ratione fuga nulla velit dolores corrupti eligendi harum. Asperiores, maxime sit vero reprehenderit id recusandae enim ut provident incidunt ex ducimus. Nisi corrupti, iste tempore ea, aspernatur asperiores voluptatum laboriosam sint, earum quia error blanditiis temporibus libero incidunt! Tempore, eligendi incidunt nihil earum aliquid voluptate quasi quaerat aut perspiciatis error magni, fugiat nesciunt at quam doloribus totam et rem pariatur aspernatur architecto minima obcaecati! Reprehenderit voluptatibus at voluptatem quis harum impedit tenetur sint. Vel debitis sed quis sit recusandae nesciunt provident.
        "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
