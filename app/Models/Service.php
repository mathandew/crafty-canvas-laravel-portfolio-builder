<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_name',
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function skills() {
    return $this->belongsToMany(Skill::class, 'service_skill');
}
}
