<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvancedTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'type',
    ];

    public function titles()
    {
        return $this->belongsTo(Title::class);
    }
}
