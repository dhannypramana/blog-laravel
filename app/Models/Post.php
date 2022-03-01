<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Dhanny Pramana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus qui eaque itaque harum natus, aperiam ab dolores repellendus. Vero est voluptas numquam. Deserunt accusantium soluta dolorem placeat harum corporis illum vitae. Consequatur sint rem id amet corrupti reprehenderit quidem hic autem error soluta ea sit ipsa harum suscipit fuga repellendus incidunt, fugiat minima in laborum similique, ab nemo vitae totam! Eum illo perferendis explicabo corporis saepe ea quidem quo soluta quaerat, dicta dolore distinctio accusamus! Ratione iusto ipsam aut accusamus. Repudiandae nemo reiciendis aliquam iusto suscipit? Natus, mollitia itaque laboriosam consectetur architecto unde reprehenderit quod rem dicta consequuntur corporis cupiditate!"
        ],
    
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Dodi Pramana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus qui eaque itaque harum natus, aperiam ab dolores repellendus. Vero est voluptas numquam. Deserunt accusantium soluta dolorem placeat harum corporis illum vitae. Consequatur sint rem id amet corrupti reprehenderit quidem hic autem error soluta ea sit ipsa harum suscipit fuga repellendus incidunt, fugiat minima in laborum similique, ab nemo vitae totam! Eum illo perferendis explicabo corporis saepe ea quidem quo soluta quaerat, dicta dolore distinctio accusamus! Ratione iusto ipsam aut accusamus. Repudiandae nemo reiciendis aliquam iusto suscipit? Natus, mollitia itaque laboriosam consectetur architecto unde reprehenderit quod rem dicta consequuntur corporis cupiditate!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $blog_posts = static::all();

        return $blog_posts->firstWhere('slug', $slug);
    }
}
