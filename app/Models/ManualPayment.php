<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualPayment extends Model
{
    use HasFactory;
    protected $fillable=['proposal_id','account_holder_name','ifsc_code','amount','account_number','image'];
}