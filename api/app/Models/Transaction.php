<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $fillable = [
        'type_id',
        'invoice',
        'invoice_number',
        'amount',
        'quantity',
        'payment_terminal',
        'cash_register_id',
    ];

    protected $casts = [
        'invoice' => 'boolean',
        'amount' => 'decimal:2',
        'quantity' => 'integer',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function cashRegister()
    {
        return $this->belongsTo(CashRegister::class);
    }

}
