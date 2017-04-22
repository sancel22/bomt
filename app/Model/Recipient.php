<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
