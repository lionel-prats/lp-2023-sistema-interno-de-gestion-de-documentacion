<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Adminstración',
            'slug' => 'administracion'
        ]);
        Category::create([
            'name' => 'Armado',
            'slug' => 'armado'
        ]);
        Category::create([
            'name' => 'Atención al cliente',
            'slug' => 'atencion-al-cliente'
        ]);
        Category::create([
            'name' => 'Datos',
            'slug' => 'datos'
        ]);
        Category::create([
            'name' => 'Dirección',
            'slug' => 'direccion'
        ]);
        Category::create([
            'name' => 'Gerencia',
            'slug' => 'gerencia'
        ]);
        Category::create([
            'name' => 'Imprenta',
            'slug' => 'imprenta'
        ]);
        Category::create([
            'name' => 'Prensa',
            'slug' => 'prensa'
        ]);
        Category::create([
            'name' => 'Sistemas',
            'slug' => 'sistemas'
        ]);
    }
}
