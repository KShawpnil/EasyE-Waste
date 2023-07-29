<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model{
    use HasFactory;
    protected $fillable = [
        'productname',
        'producttype',
        'productamount',
        'endproduct',
    ];

    protected $attributes=[
        'user_id'=>1,
        'status'=>'pending',
    ];
}
