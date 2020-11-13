<?php

namespace Database\Seeders;

use App\Models\Category as ModelsCategory;
use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ModelsCategory::create([
            'name' => 'Marketing'
        ]);

        ModelsCategory::create([
            'name' => 'Business'
        ]);

        ModelsCategory::create([
            'name' => 'Finance'
        ]);

        ModelsCategory::create([
            'name' => 'Entrepreneurship'
        ]);

        ModelsCategory::create([
            'name' => 'Science'
        ]);

        ModelsCategory::create([
            'name' => 'Biography'
        ]);
    }
}
