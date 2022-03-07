<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

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
        
        // Post Seeder
        Post::create([
            'title' => 'Judul Pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum enim et odit est tempora corrupti quos perspiciatis quas temporibus ab voluptatem totam laborum ratione. Illum incidunt laborum eligendi porro accusamus cumque blanditiis',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum enim et odit est tempora corrupti quos perspiciatis quas temporibus ab voluptatem totam laborum ratione. Illum incidunt laborum eligendi porro accusamus cumque blanditiis laboriosam nihil illo deleniti sapiente libero corrupti eveniet vitae dicta pariatur, aut ad minus aliquid ullam tempore.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur omnis deserunt blanditiis illum voluptatum doloremque fugit vitae, iste laudantium numquam, inventore atque magni ipsam tempora quasi nesciunt est fugiat commodi eos rerum! Magnam alias eos, sequi vitae praesentium quam quis omnis itaque, optio provident, aliquid ipsa blanditiis doloribus maiores odit.</p>',
            'slug' => 'judul_pertama',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum enim et odit est tempora corrupti quos perspiciatis quas temporibus ab voluptatem totam laborum ratione. Illum incidunt laborum eligendi porro accusamus cumque blanditiis',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum enim et odit est tempora corrupti quos perspiciatis quas temporibus ab voluptatem totam laborum ratione. Illum incidunt laborum eligendi porro accusamus cumque blanditiis laboriosam nihil illo deleniti sapiente libero corrupti eveniet vitae dicta pariatur, aut ad minus aliquid ullam tempore.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur omnis deserunt blanditiis illum voluptatum doloremque fugit vitae, iste laudantium numquam, inventore atque magni ipsam tempora quasi nesciunt est fugiat commodi eos rerum! Magnam alias eos, sequi vitae praesentium quam quis omnis itaque, optio provident, aliquid ipsa blanditiis doloribus maiores odit.</p>',
            'slug' => 'judul_kedua',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum enim et odit est tempora corrupti quos perspiciatis quas temporibus ab voluptatem totam laborum ratione. Illum incidunt laborum eligendi porro accusamus cumque blanditiis',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum enim et odit est tempora corrupti quos perspiciatis quas temporibus ab voluptatem totam laborum ratione. Illum incidunt laborum eligendi porro accusamus cumque blanditiis laboriosam nihil illo deleniti sapiente libero corrupti eveniet vitae dicta pariatur, aut ad minus aliquid ullam tempore.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur omnis deserunt blanditiis illum voluptatum doloremque fugit vitae, iste laudantium numquam, inventore atque magni ipsam tempora quasi nesciunt est fugiat commodi eos rerum! Magnam alias eos, sequi vitae praesentium quam quis omnis itaque, optio provident, aliquid ipsa blanditiis doloribus maiores odit.</p>',
            'slug' => 'judul_ketiga',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum enim et odit est tempora corrupti quos perspiciatis quas temporibus ab voluptatem totam laborum ratione. Illum incidunt laborum eligendi porro accusamus cumque blanditiis',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum enim et odit est tempora corrupti quos perspiciatis quas temporibus ab voluptatem totam laborum ratione. Illum incidunt laborum eligendi porro accusamus cumque blanditiis laboriosam nihil illo deleniti sapiente libero corrupti eveniet vitae dicta pariatur, aut ad minus aliquid ullam tempore.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur omnis deserunt blanditiis illum voluptatum doloremque fugit vitae, iste laudantium numquam, inventore atque magni ipsam tempora quasi nesciunt est fugiat commodi eos rerum! Magnam alias eos, sequi vitae praesentium quam quis omnis itaque, optio provident, aliquid ipsa blanditiis doloribus maiores odit.</p>',
            'slug' => 'judul_keempat',
            'category_id' => 1,
            'user_id' => 2
        ]);

        // User Seeder
        User::create([
            'name' => 'Dhanny Adhi Pramana',
            'slug' => 'dhanny-adhi-pramana',
            'email' => 'p.dhannypramana@gmail.com',
            'password' => bcrypt('dani')
        ]);

        User::create([
            'name' => 'John Doe',
            'slug' => 'john-doe',
            'email' => 'p.john@gmail.com',
            'password' => bcrypt('john')
        ]);

        // Categry Seeder
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
    }
}
