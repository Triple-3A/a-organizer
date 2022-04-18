<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'nickname',
        'user_id',
        'admin_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function technicians()
    {
        return $this->belongsToMany(Technician::class);
    }
}
