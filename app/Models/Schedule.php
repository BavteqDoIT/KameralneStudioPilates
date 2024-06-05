<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'date',
        'start_time',
        'end_time',
        'schedule_slots'
    ];

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
