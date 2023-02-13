<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run()
    {
        // direccion
        User::create([
            'name' => 'Belén Conforti',
            'email' => 'belen@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'belen-conforti',
            'admin' => '1',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Mariano Díaz Ojeda',
            'email' => 'mariano@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'mariano-diaz-ojeda',
            'admin' => '1',
            'active' => '1'
        ]);
        
        // sistemas
        User::create([
            'name' => 'Leonardo Saia',
            'email' => 'leonardo@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'leonardo-saia',
            'admin' => '1',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Lionel Prats',
            'email' => 'lionelprats@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'lionel-prats',
            'admin' => '1',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Mariano Gonzalo',
            'email' => 'mgonzalo@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'mariano-gonzalo',
            'admin' => '1',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Rodrigo Turckowicz',
            'email' => 'rodrigo@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'rodrigo-turckowicz',
            'admin' => '1',
            'active' => '1'
        ]);

        // administracion
        User::create([
            'name' => 'Leandro Farinha',
            'email' => 'leandro@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'leandro-farinha',
            'admin' => '0',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Natalia Maidana',
            'email' => 'natalia@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'natalia-maidana',
            'admin' => '0',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Nelson Mandela',
            'email' => 'nelson@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'nelson-mandela',
            'admin' => '0',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Noelia Brescacin',
            'email' => 'noelia@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'noelia-brescacin',
            'admin' => '0',
            'active' => '1'
        ]);

        // armado
        User::create([
            'name' => 'Gastón Amaya',
            'email' => 'gaston@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'gaston-amaya',
            'admin' => '0',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Marcelo Díaz',
            'email' => 'marcelo@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'marcelo-diaz',
            'admin' => '0',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Melina Franzese',
            'email' => 'melina@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'melina-franzese',
            'admin' => '0',
            'active' => '1'
        ]);

        // atencion al cliente
        User::create([
            'name' => 'Norma Martins',
            'email' => 'norma@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'norma-martins',
            'admin' => '0',
            'active' => '1'
        ]);

        // datos
        User::create([
            'name' => 'Hernán Isla',
            'email' => 'hernani@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'hernan-isla',
            'admin' => '0',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Hernán Messina',
            'email' => 'hernanm@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'hernan-messina',
            'admin' => '0',
            'active' => '1'
        ]);

        // imprenta
        User::create([
            'name' => 'Matías Mazzuchelli',
            'email' => 'matias@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'matias-mazzuchelli',
            'admin' => '0',
            'active' => '1'
        ]);

        // periodismo
        User::create([
            'name' => 'Guillermo Rizzi',
            'email' => 'guillermo@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'guillermo-rizzi',
            'admin' => '0',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Gustavo Garzón',
            'email' => 'gustavo@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'gustavo-garzon',
            'admin' => '0',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Hector Torres',
            'email' => 'hector@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'hector-torres',
            'admin' => '0',
            'active' => '1'
        ]);
        User::create([
            'name' => 'Juan Pablo Toscano',
            'email' => 'juanpablo@revistapalermo.net',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'slug' => 'juan-pablo-toscano',
            'admin' => '0',
            'active' => '1'
        ]);
    }
}
