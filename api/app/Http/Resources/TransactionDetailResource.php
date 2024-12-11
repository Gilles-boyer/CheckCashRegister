<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionDetailResource extends JsonResource
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
            'type_id' => new TypeResource($this->type),
            'invoice' => $this->invoice,
            'invoice_number' => $this->invoice_number,
            'amount' => $this->amount,
            'quantity' => $this->quantity,
            'payment_terminal' => $this->payment_terminal,
        ];
    }
}
