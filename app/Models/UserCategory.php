<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    use HasFactory;

    // relacion de 1 a N entre user_categories y files
    public function files(){
        return $this->hasMany(File::class);
    }
}
