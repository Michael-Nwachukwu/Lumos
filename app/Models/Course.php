<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $table = 'courses';

    public function scopeFilter($query, array $filters){
        // if this is not false 
        if($filters['tag'] ?? false){
            $query->where('coursename', 'like', '%' . request('tag') . '%')->orWhere('description', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('coursename', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }


}
