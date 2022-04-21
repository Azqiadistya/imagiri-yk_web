<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;

    protected $table = "pendaftar";

    protected $fillable = ["user_id", "magang_id","magang_name","user_name","created_at", "updated_at"];
}