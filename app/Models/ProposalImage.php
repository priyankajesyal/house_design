<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalImage extends Model implements \Czim\Paperclip\Contracts\AttachableInterface
{
    use HasFactory;
    use \Czim\Paperclip\Model\PaperclipTrait;

    protected $fillable = ['portfolio_id', 'images'];

    protected $appends  = ['image'];


    public function __construct(array $attributes = [])
    {
        $this->hasAttachedFile('images', [
            // 'variants' => [
            //     'medium' => [
            //         'auto-orient' => [],
            //         'resize'      => ['dimensions' => '300x300'],
            //     ],
            //     'thumb' => '100x100',
            //     'type' => 'image'
            // ],
            // 'attributes' => [
            //     'variants' => false,
            // ],
        ]);

        parent::__construct($attributes);
    }


    public function getImageAttribute()
    {
        return $this->images->url();
    }


    public function proposal()
    {
        return $this->belongsTo(Proposal::class, 'id')->withTimestamps();
    }

}