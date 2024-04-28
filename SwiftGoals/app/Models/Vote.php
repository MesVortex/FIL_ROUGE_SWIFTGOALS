<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'clientID',
        'questionID',
        'type',
    ];

    public function question(){
        return $this->belongsTo(Question::class, 'questionID');
    }

    public function user(){
        return $this->belongsTo(User::class, 'clientID');
    }
}
