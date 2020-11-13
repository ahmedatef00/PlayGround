<?php

namespace Database\Seeders;

use Database\Seeders\BooksTable;
use Database\Seeders\Category;
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
        $this->call(Category::class);
        $this->call(BooksTable::class);
    }
}
