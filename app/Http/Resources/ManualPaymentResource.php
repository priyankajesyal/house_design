<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ManualPaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'proposal_id' => $this->proposal_id,
            'milestone_id' => $this->milestone_id,
            'amount' => $this->amount,
            'status' => $this->status,
            'receipt' => $this->receipt
        ];
    }
}
