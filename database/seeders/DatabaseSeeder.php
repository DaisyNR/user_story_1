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
        'health_and_beauty',
        'home_and_gardening',
        'toys',
        'sport',
        'pets',
        'books_and_magazines',
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
