<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Desenvolvimento Web'
        ]);

        Category::create([
            'name' => 'Desenho web'
        ]);

        Category::create([
            'name' => 'Programação'
        ]);
    }
}
