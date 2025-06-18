<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_template')
                    ->withPivot('color', 'background', 'education', 'experience', 'skills', 'services', 'projects')
                    ->withTimestamps();
    }
}
