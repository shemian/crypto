<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;
    protected $tabel = 'withdraws';
    protected $fillables =[
        'amount',
        'tradetype',
        'coin',
        'wallet_id',
    ];
    

    public function user(){
        return $this->belongsTo(User::class);
    }
}
