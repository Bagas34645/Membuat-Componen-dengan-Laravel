<?php

namespace App\Models;

use Illuminate\Support\Collection;

// use Illuminate\Database\Eloquent\Model;

class Categories
{
    private static $product_categories = [
        [
            'id' => 1,
            'name' => 'pria',
            'slug' => 'Pakaian-Pria',
            'description' => 'Ini adalah produk pakaian pria',
            'image' => 'https://example.com/image1.jpg',
        ],
        [
            'id' => 2,
            'name' => 'wanita',
            'slug' => 'Pakaian-Wanita',
            'description' => 'Ini adalah produk pakaian wanita',
            'image' => 'https://example.com/image2.jpg',
        ],
        [
            'id' => 3,
            'name' => 'anak-anak',
            'slug' => 'Pakaian-Anak-Anak',
            'description' => 'Ini adalah produk pakaian anak-anak',
            'image' => 'https://example.com/image3.jpg',
        ],
        [
            'id' => 4,
            'name' => 'aksesori',
            'slug' => 'Aksesori',
            'description' => 'Ini adalah produk aksesori',
            'image' => 'https://example.com/image4.jpg',
        ],
        [
            'id' => 5,
            'name' => 'sepatu',
            'slug' => 'Sepatu',
            'description' => 'Ini adalah produk sepatu',
            'image' => 'https://example.com/image5.jpg',
        ]
    ];

    public static function all()
    {
        return collect(self::$product_categories);
    }

    public static function find($slug)
    {
        $categories = static::all();
        return $categories->firstWhere('slug', $slug);
        // foreach ($categories as $category) {
        //     if ($category['slug'] === $slug) {
        //         return $category;
        //     }
        // }
        // return null;
    }
}
