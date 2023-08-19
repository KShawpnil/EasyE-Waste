<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QFD extends Model
{
    use HasFactory;

    protected $fillable=[
        'crrank1',
        'wastemanage1',
        'wastemini1',
        'wastecollect1',
        'produra1',

        'crrank2',
        'wastemanage2',
        'wastemini2',
        'wastecollect2',
        'produra2',

        'crrank3',
        'wastemanage3',
        'wastemini3',
        'wastecollect3',
        'produra3',

        'crrank4',
        'wastemanage4',
        'wastemini4',
        'wastecollect4',
        'produra4',

        'crrank5',
        'wastemanage5',
        'wastemini5',
        'wastecollect5',
        'produra5',
    ];

    protected $attributes=[
        'cr1'=>'Biodegradable',
        'cr2'=>'Recyleing of materials',
        'cr3'=>'Extraction of heavy materials',
        'cr4'=>'Transfer of ewaste',
        'cr5'=>'Remaining waste disposal',
    ];

    public function user():BelongsTo
    {
        return $this->belongsto(User::class);
    }
}
