<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'institute_name',
        'institute_city',
        'institute_country',
        'institute_address',
        'enrolled_year',
        'passing_year',
        'result',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
