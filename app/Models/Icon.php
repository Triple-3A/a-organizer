<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'icon',
    ];

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
