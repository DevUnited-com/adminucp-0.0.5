<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $fillable = [
        'username',
        'password',
        'socialClub',
        'whitelisted',
        'banned',
    ];
}
