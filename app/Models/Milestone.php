<?php

namespace App\Models;

use App\Models\ManualPayment;
use App\Models\MilestonePayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Milestone extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'type'];

    public function milestonePayment(){
        return $this->hasMany(MilestonePayment::class);
    }
}