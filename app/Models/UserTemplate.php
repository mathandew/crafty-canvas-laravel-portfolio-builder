<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'template_id',
        'color',
        'background',
        'education',
        'experience',
        'skills',
        'services',
        'projects',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Template model
    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
