<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $tabel = 'deposits';
    protected $fillables=[
        'amount',
        'coin',
        'transaction_code',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
