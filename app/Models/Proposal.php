<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable=['portfolio_id','user_id','description'];
    protected $appends = ['image'];


    public function proposalImages()
    {
        return $this->hasMany(ProposalImage::class, 'proposal_id');
    }

    public function portfolio(){
        return $this->belongsTo(Portfolio::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function manual(){
        return $this->hasOne(ManualPayment::class);
    }

    public function getImageAttribute()
    {
        return ProposalImage::where('proposal_id', $this->id)->get();
    }
}