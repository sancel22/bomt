<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    public $fillable = ['full_name', 'address', 'contact_number'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
