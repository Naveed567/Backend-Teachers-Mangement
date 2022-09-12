<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacherschedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'teacher_id',
        'class',
        'timingfrom',
        'timingto',
        'duration'
    ];
}
