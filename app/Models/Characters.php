<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    use HasFactory;
    protected $table = 'characters';
    protected $fillable = [
        'accountID',
        'whitelisted',
        'adminRank',
        'firstname',
        'lastname',
        'permaDead',
        'money',
        'gang',
        'gangrang',
        'faction',
    ];
}
