<?php

namespace App\Models;

use App\Models\Milestone;
use App\Models\ManualPayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MilestonePayment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'proposal_id', 'milestone_id', 'amount', 'status', 'task'];
    // protected $guarded = [];

    public function manualPayment()
    {
        return  $this->belongsTo(ManualPayment::class);
    }

    public function milestone()
    {
        return $this->belongsTo(Milestone::class);
    }
}