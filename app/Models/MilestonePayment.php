<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MilestonePayment extends Model
{
    use HasFactory;

    protected $fillable=['user_id','proposal_id','milestone_id','amount','status','task'];
}