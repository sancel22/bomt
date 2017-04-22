<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    public $fillable = ['amount', 'payment_code'];

    public function getCredits()
    {
        return $this->where('user_id', auth()->user()->id)->sum('amount');
    }
}
