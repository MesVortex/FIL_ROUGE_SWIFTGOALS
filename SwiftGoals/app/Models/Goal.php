<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'mainGoal',
        'userID',
        'categoryID',
        'isTemplate',
        'isComplete',
    ];

    public function steps()
    {
        return $this->hasMany(Step::class, 'goalID');
    }
}
