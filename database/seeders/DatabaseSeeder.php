<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class); 
        $this->call(CategorySeeder::class); 
        $this->call(UserCategorySeeder::class); 
        $this->call(FileSeeder::class);
    }
}
