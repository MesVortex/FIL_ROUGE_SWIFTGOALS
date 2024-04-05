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
        'goalID',
        'isComplete',
    ];

    public function goals()
    {
        return $this->belongsTo(Goal::class, 'goalID');
    }

}
