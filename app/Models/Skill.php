<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'skill_name',
        'skill_level',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function projects() {
        return $this->belongsToMany(Project::class, 'project_skill');
    }

    public function services() {
    return $this->belongsToMany(Service::class, 'service_skill');
}
}
