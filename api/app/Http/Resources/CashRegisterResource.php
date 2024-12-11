<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CashRegisterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'location_id' => new LocationResource($this->location),
            'user_id' => new UserDataResource($this->user),
            'date' => $this->date,
            'comment' => $this->comment,
            'transactions' => TransactionDetailResource::collection($this->transactions)
        ];
    }
}
