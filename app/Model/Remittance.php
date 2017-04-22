<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Remittance extends Model
{
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
