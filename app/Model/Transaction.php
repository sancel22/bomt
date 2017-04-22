<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Transaction extends Model
{
    public $fillable = ['remittance_id', 'recipient_id', 'memo'];

    public function transactionRecipients()
    {
        return $this->hasMany(Recipient::class);
    }

    public function transactionRemittances()
    {
        return $this->hasMany(Remittance::class);
    }

    public function transactionUsers()
    {
        return $this->hasMany(User::class);
    }
}
