<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    // relacion N a N entre categories y users
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
