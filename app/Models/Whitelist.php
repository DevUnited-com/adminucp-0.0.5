<?php

namespace App\Models;

use http\QueryString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whitelist extends Model
{
    use HasFactory;
    protected $table = 'whitelist';
    protected $fillable = [
        'quest1',
        'quest2',
        'quest3',
        'quest4',
        'quest5',
        'quest6',
        'quest7',
        'quest8',
        'quest9',
        'quest10',


    ];
}
