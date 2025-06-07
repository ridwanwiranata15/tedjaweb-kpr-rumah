<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interest extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "house_id","bank_id", "interest","duration"
    ];
}

