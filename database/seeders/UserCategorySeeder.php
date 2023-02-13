<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\UserCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserCategorySeeder extends Seeder
{
    public function run()
    {
        // accesos administradores
        for($i = 1; $i <= 6; $i++ ){
            for($j = 1; $j <= 9; $j++ ){
                UserCategory::create([
                    'user_id' => $i,
                    'category_id' => $j
                ]);
            }
        }
        
        // leandro
        UserCategory::create([
            'user_id' => 7,
            'category_id' => 1
        ]);

        // natalia
        UserCategory::create([
            'user_id' => 8,
            'category_id' => 1
        ]);
        UserCategory::create([
            'user_id' => 8,
            'category_id' => 6
        ]);
        UserCategory::create([
            'user_id' => 8,
            'category_id' => 8
        ]);

        // nelson
        UserCategory::create([
            'user_id' => 9,
            'category_id' => 1
        ]);

        // noelia
        UserCategory::create([
            'user_id' => 10,
            'category_id' => 1
        ]);
        UserCategory::create([
            'user_id' => 10,
            'category_id' => 6
        ]);

        // gaston
        UserCategory::create([
            'user_id' => 11,
            'category_id' => 2
        ]);
        
        // marcelo
        UserCategory::create([
            'user_id' => 12,
            'category_id' => 2
        ]);

        // melina
        UserCategory::create([
            'user_id' => 13,
            'category_id' => 2
        ]);

        // norma
        UserCategory::create([
            'user_id' => 14,
            'category_id' => 3
        ]);

        // hernan isla
        UserCategory::create([
            'user_id' => 15,
            'category_id' => 4
        ]);

        // hernan messina
        UserCategory::create([
            'user_id' => 16,
            'category_id' => 4
        ]);

        // matias
        UserCategory::create([
            'user_id' => 17,
            'category_id' => 7
        ]);

        // guillermo
        UserCategory::create([
            'user_id' => 18,
            'category_id' => 8
        ]);

        // gustavo
        UserCategory::create([
            'user_id' => 19,
            'category_id' => 8
        ]);

        // hector
        UserCategory::create([
            'user_id' => 20,
            'category_id' => 8
        ]);

        // juan pablo
        UserCategory::create([
            'user_id' => 21,
            'category_id' => 8
        ]);
    }
}
