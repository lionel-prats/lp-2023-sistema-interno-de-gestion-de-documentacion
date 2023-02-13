<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->string('slug')->unique();
            $table->enum('admin', [User::ADMIN, User::USER])
                ->default(User::USER); 
            $table->enum('active', [User::ACTIVE, User::INACTIVE])
                ->default(User::ACTIVE); 
            
            $table->timestamps(); // created_at / updated_at
        });
    }
    /* public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('admin', [User::ADMIN, User::USER])
                ->default(User::USER); 
            $table->enum('active', [User::ACTIVE, User::INACTIVE])
                ->default(User::ACTIVE); 
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    } */

    

    
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

