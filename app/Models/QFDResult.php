<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QFDResult extends Model
{
    use HasFactory;
    protected $fillable=[
        'total_importance1',
        'total_importance2',
        'total_importance3',
        'total_importance4',
        'performance1',
        'performance2',
        'performance3',
        'performance4',
    ];
}
