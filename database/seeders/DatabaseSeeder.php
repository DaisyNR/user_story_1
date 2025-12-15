<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public $categories = [
        'tech',
        'clothing',
        'health and beauty',
        'home and gardening',
        'toys',
        'sport',
        'pets',
        'books and magazines',
        'accessories',
        'motors'
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        foreach ($this->categories as $category){
            Category::create([
                'name'=> $category
            ]);
        };

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
