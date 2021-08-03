<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable=['portfolio_id','user_id','description'];

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
}