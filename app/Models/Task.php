<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'repeatable',
        'date',
        'time',
        'done',
    ];

    public function descriptions()
    {
        return $this->belongsToMany(Description::class);
    }

    public function icons()
    {
        return $this->belongsToMany(Icon::class);
    }

    public function titles()
    {
        return $this->belongsToMany(Title::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
