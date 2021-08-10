<?php

namespace App\Models;

use App\Models\PortfolioImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'user_id'];
    protected $appends = ['image'];
    public function portfolioImages()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id');
    }

    public function proposal()
    {
        return $this->hasOne(Proposal::class);
    }

    public function getImageAttribute()
    {
        return PortfolioImage::where('portfolio_id', $this->id)->get();
    }
}