<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatecourseController extends Controller
{
    public function create(Request $request)
    {
        
        $formFields = $request->validate([
            'teacher_id' => 'required'
        ]);

    }
}
