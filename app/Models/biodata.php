<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $table = "data_diri";

    protected $fillable = ["nama", "email", "alamat","univ", "nim", "nik","ijazah", "cv", "user_id"];
}