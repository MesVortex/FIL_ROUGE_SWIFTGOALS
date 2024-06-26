<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tinystep extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'stepID',
        'isComplete',
    ];

    public function steps()
    {
        return $this->belongsTo(Step::class, 'stepID');
    }
}
