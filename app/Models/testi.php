<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testi extends Model
{
    use HasFactory;
    
    protected $table = "testi";

    protected $fillable = ["id", "nama","position","testi","created_at", "updated_at"];
}
