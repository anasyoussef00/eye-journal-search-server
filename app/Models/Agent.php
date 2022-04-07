<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_acceptor_term_id',
        'reference_number',
        'transaction_amount',
        'transaction_local_date',
        'action_code',
        'processing_code',
        'autho_flag',
        'reversal_flag'
    ];
}
