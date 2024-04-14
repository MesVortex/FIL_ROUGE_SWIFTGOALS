<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'dueDate',
        'goalID',
        'isComplete',
        'priority',
    ];

    public function goals()
    {
        return $this->belongsTo(Goal::class, 'goalID');
    }

    public function tinySteps()
    {
        return $this->hasMany(Tinystep::class, 'stepID');
    }

}
