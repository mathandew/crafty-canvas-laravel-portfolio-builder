<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'designation',
        'organization_name',
        'service_id',
        'duration',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'experience_skill'); // Ensure this matches your pivot table name
    }
}
