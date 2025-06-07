<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomePhoto extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "house_id","photo"
    ];
}

