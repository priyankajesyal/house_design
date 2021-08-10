<?php

namespace App\Models;

use App\Models\Proposal;
use App\Models\Milestone;
use App\Models\MilestonePayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ManualPayment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'proposal_id', 'milestone_id', 'amount', 'status', 'receipt', 'type'];

    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }

    public function milestonePayment()
    {
        return $this->hasMany(MilestonePayment::class);
    }
}