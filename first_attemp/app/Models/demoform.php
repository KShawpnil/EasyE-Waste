<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demoform extends Model
{
    use HasFactory;
    protected $table = "demoform";
    protected $primaryKey = "dform_id";
}
