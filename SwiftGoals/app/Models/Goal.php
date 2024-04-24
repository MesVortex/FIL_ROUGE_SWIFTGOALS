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
        'isPinned',
        'isBanned',
    ];

    public function steps()
    {
        return $this->hasMany(Step::class, 'goalID');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'categoryID');
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'goalID');
    }

    public function favoriteList()
    {
        return $this->belongsToMany(User::class, 'favorites', 'goal_id', 'client_id');
    }

}
