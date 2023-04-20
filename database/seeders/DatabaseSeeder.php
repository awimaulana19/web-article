<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Awi Maulana',
        //     'email' => 'awimaulana19@gmail.com',
        //     'password' => bcrypt('awi123')
        // ]);

        // User::create([
        //     'name' => 'Aswar',
        //     'email' => 'aswarfajar@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(4)->create();

        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Designer',
            'slug' => 'web-designer'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'hanya-saya'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        // Post::create([
        //     'judul' => 'Belajar Java',
        //     'slug' => 'belajar-java',
        //     'preview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur tempora vel necessitatibus fuga voluptatum quasi odit ipsum non voluptate, tenetur commodi laborum, reiciendis fugit saepe tempore? Debitis, numquam reprehenderit.',
        //     'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur tempora vel necessitatibus fuga voluptatum quasi odit ipsum non voluptate, tenetur commodi laborum, reiciendis fugit saepe tempore? Debitis, numquam reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt provident suscipit odit distinctio obcaecati repudiandae saepe est, voluptatum ipsa, sint maxime, nihil repellat nemo minus earum ratione excepturi. Ea, numquam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium laudantium, debitis, fugiat quaerat quasi alias ex nesciunt temporibus, libero eligendi facilis distinctio velit sit aut quia ea repellendus unde earum?',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'judul' => 'Belajar Kotlin',
        //     'slug' => 'belajar-kotlin',
        //     'preview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur tempora vel necessitatibus fuga voluptatum quasi odit ipsum non voluptate, tenetur commodi laborum, reiciendis fugit saepe tempore? Debitis, numquam reprehenderit.',
        //     'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur tempora vel necessitatibus fuga voluptatum quasi odit ipsum non voluptate, tenetur commodi laborum, reiciendis fugit saepe tempore? Debitis, numquam reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt provident suscipit odit distinctio obcaecati repudiandae saepe est, voluptatum ipsa, sint maxime, nihil repellat nemo minus earum ratione excepturi. Ea, numquam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium laudantium, debitis, fugiat quaerat quasi alias ex nesciunt temporibus, libero eligendi facilis distinctio velit sit aut quia ea repellendus unde earum?',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'judul' => 'Galau',
        //     'slug' => 'galau',
        //     'preview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur tempora vel necessitatibus fuga voluptatum quasi odit ipsum non voluptate, tenetur commodi laborum, reiciendis fugit saepe tempore? Debitis, numquam reprehenderit.',
        //     'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur tempora vel necessitatibus fuga voluptatum quasi odit ipsum non voluptate, tenetur commodi laborum, reiciendis fugit saepe tempore? Debitis, numquam reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt provident suscipit odit distinctio obcaecati repudiandae saepe est, voluptatum ipsa, sint maxime, nihil repellat nemo minus earum ratione excepturi. Ea, numquam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium laudantium, debitis, fugiat quaerat quasi alias ex nesciunt temporibus, libero eligendi facilis distinctio velit sit aut quia ea repellendus unde earum?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'judul' => 'Figma',
        //     'slug' => 'figma',
        //     'preview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur tempora vel necessitatibus fuga voluptatum quasi odit ipsum non voluptate, tenetur commodi laborum, reiciendis fugit saepe tempore? Debitis, numquam reprehenderit.',
        //     'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur tempora vel necessitatibus fuga voluptatum quasi odit ipsum non voluptate, tenetur commodi laborum, reiciendis fugit saepe tempore? Debitis, numquam reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt provident suscipit odit distinctio obcaecati repudiandae saepe est, voluptatum ipsa, sint maxime, nihil repellat nemo minus earum ratione excepturi. Ea, numquam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium laudantium, debitis, fugiat quaerat quasi alias ex nesciunt temporibus, libero eligendi facilis distinctio velit sit aut quia ea repellendus unde earum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

    }
}
