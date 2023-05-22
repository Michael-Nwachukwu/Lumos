<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Event;
use App\Models\Course;
use App\Models\Reviews;
use App\Models\Teacher;
use App\Models\Homework;
use App\Models\Syllabus;
use App\Models\Studentinbox;
use App\Models\Teachersinbox;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(25)->create();

        Admin::factory()->create();

        // $teacher = User::Where('role', 1);

        Course::factory(6)->create([
            'scope' => 'Have an intermediate skill level of Python programming, Use the Jupyter Notebook Environment., Use the numpy library to create and manipulate arrays., Use the pandas module with Python to create and structure data., Create data visualizations using matplotlib and the seaborn modules with python.', 
        ]);

        Event::factory(6)->create();

        // Homework::factory(6)->create([
        //     // 'homework_id' => $course->id 
        // ]);

        Homework::factory(6)->create();

        Reviews::factory(6)->create();

        Studentinbox::factory(6)->create();

        Syllabus::factory(5)->create();

        Teacher::factory(4)->create();

        Teachersinbox::factory(6)->create();


    }
}
