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
        
        User::create([
                'name' => 'Ahmad Ilham',
                'username' => 'ahmadilham13',
                'email' => 'ahmad13ilham13@gmail.com',
                'password' => bcrypt('12345')
            ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati a nesciunt tenetur iure facere blanditiis nostrum eum, id ut debitis, non cumque dolore soluta sequi? Dolorum quisquam tempora corrupti sequi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam incidunt debitis iste, quaerat sequi, rem unde, quisquam nam deleniti praesentium necessitatibus amet expedita at! Quo at alias eius? Necessitatibus quis consequatur a adipisci error. Accusantium delectus non magnam! Aperiam ea tempore id, sint iusto nulla corrupti voluptate cum illo nemo provident tempora voluptatibus delectus excepturi debitis aliquam maxime vel repellat, corporis repudiandae perspiciatis saepe dolore. Dicta vero voluptatem reprehenderit sapiente perspiciatis assumenda, laudantium nemo voluptas eius, asperiores, cum quo? Eum cum officia hic vel odit soluta earum provident illo eos officiis eaque eius facilis ex dignissimos, fuga quod blanditiis deleniti!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati a nesciunt tenetur iure facere blanditiis nostrum eum, id ut debitis, non cumque dolore soluta sequi? Dolorum quisquam tempora corrupti sequi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam incidunt debitis iste, quaerat sequi, rem unde, quisquam nam deleniti praesentium necessitatibus amet expedita at! Quo at alias eius? Necessitatibus quis consequatur a adipisci error. Accusantium delectus non magnam! Aperiam ea tempore id, sint iusto nulla corrupti voluptate cum illo nemo provident tempora voluptatibus delectus excepturi debitis aliquam maxime vel repellat, corporis repudiandae perspiciatis saepe dolore. Dicta vero voluptatem reprehenderit sapiente perspiciatis assumenda, laudantium nemo voluptas eius, asperiores, cum quo? Eum cum officia hic vel odit soluta earum provident illo eos officiis eaque eius facilis ex dignissimos, fuga quod blanditiis deleniti!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati a nesciunt tenetur iure facere blanditiis nostrum eum, id ut debitis, non cumque dolore soluta sequi? Dolorum quisquam tempora corrupti sequi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam incidunt debitis iste, quaerat sequi, rem unde, quisquam nam deleniti praesentium necessitatibus amet expedita at! Quo at alias eius? Necessitatibus quis consequatur a adipisci error. Accusantium delectus non magnam! Aperiam ea tempore id, sint iusto nulla corrupti voluptate cum illo nemo provident tempora voluptatibus delectus excepturi debitis aliquam maxime vel repellat, corporis repudiandae perspiciatis saepe dolore. Dicta vero voluptatem reprehenderit sapiente perspiciatis assumenda, laudantium nemo voluptas eius, asperiores, cum quo? Eum cum officia hic vel odit soluta earum provident illo eos officiis eaque eius facilis ex dignissimos, fuga quod blanditiis deleniti!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati a nesciunt tenetur iure facere blanditiis nostrum eum, id ut debitis, non cumque dolore soluta sequi? Dolorum quisquam tempora corrupti sequi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam incidunt debitis iste, quaerat sequi, rem unde, quisquam nam deleniti praesentium necessitatibus amet expedita at! Quo at alias eius? Necessitatibus quis consequatur a adipisci error. Accusantium delectus non magnam! Aperiam ea tempore id, sint iusto nulla corrupti voluptate cum illo nemo provident tempora voluptatibus delectus excepturi debitis aliquam maxime vel repellat, corporis repudiandae perspiciatis saepe dolore. Dicta vero voluptatem reprehenderit sapiente perspiciatis assumenda, laudantium nemo voluptas eius, asperiores, cum quo? Eum cum officia hic vel odit soluta earum provident illo eos officiis eaque eius facilis ex dignissimos, fuga quod blanditiis deleniti!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
