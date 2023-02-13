<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    // relacion de N a 1 entre files y user_categories
    public function userCategory(){
        return $this->belongsTo(UserCategory::class);
    }
}
