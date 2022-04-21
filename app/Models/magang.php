<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class magang extends Model
{
    use HasFactory;

    protected $table = "magang";

    protected $fillable = ["posisi", "periode", "rincian_kegiatan"];
}