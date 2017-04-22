<?php

namespace App;

use App\Model\Recipient;
use App\Model\Transaction;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Credit;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function recipients()
    {
        return $this->hasMany(Recipient::class);
    }
}
