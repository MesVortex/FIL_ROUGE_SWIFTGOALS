<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'goalID',
        'flaggerID',
    ];

    public function goal()
    {
        return $this->belongsTo(Goal::class, 'goalID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'flaggerID');
    }
}
