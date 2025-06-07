<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class installment extends Model
{
    use HasFactory;
    protected $fillable = [
        "mortgage_requuest_id",
        "no_of_payment",
        "total_taxt_amount",
        "grand_total_amount",
        "sub_total_amount",
        "insurance_amount",
        "proof","is_paid",
        "payment_type",
        "remaining_loan_amount"
    ];

    public function MorgageREquest(){
        return $this->belongsTo(MortgageRequest::class);
    }
}

