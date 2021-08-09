<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualPayment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','proposal_id','milestone_id','amount','status','receipt','type'];

    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }
}