<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MortgageRequest extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "user_id","house_id","duration","bank_name","interest","interest_id","dp_total_amount","loan_total_amount","monthly_amount","dp_precentage","status","documents","house_price","loan_interest_total_amount"
    ];
}
