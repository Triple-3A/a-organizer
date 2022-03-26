<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'title',
        'type',
    ];

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function advancedtitles()
    {
        return $this->belongsToMany(AdvancedTitle::class);
    }
}
