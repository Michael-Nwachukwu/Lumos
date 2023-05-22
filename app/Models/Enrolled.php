<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolled extends Model
{
    use HasFactory;
    public $table = 'enrolled';

    public function user(){

        return $this->hasMany(User::class, 'user_id', 'course_id');

    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
