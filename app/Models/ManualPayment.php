<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualPayment extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'proposal_id', 'account_holder_name', 'ifsc_code', 'account_number', 'image'];

    public function proposals()
    {
        return $this->hasOne(Proposal::class);
    }
}
