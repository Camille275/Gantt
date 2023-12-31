<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gantt extends Model
{
    use HasFactory;

    protected $fillable = [
        'taskName',
        'taskDescription',
        'startDate',
        'endDate',
        'duration',
        'percentComplete',
        'assignedPerson'
    ];
}
