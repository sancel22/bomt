<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Transaction extends Model
{
    public $fillable = ['remittance_id', 'recipient_id', 'memo', 'credit_id', 'code'];

    public function recipient()
    {
        return $this->belongsTo(Recipient::class);
    }

    public function remittance()
    {
        return $this->belongsTo(Remittance::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function credit(){
        return $this->belongsTo(Credit::class);
    }
}
