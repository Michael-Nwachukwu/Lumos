<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Event;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Enrolled;
use App\Models\Homework;
use Illuminate\View\View;
use App\Models\Studentinbox;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use App\Models\Teachersinbox;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // handles displaying home dashboard and fetching variables in student  dashboard
    public function studentindex()
    {

        if (auth()->guest()) {
            return redirect('login');
        }

        return view('dashboards.student_dash.dashboard', [

            /**
             * $enrollist gets the list of enrolment and gets the enrolment with same user id as logged in user.
             * $course gets the course whose id matches with the  enrolment course id. this course id is the id of the very  course in courses table. it is saved during enrollment
             * 
             * $teacher_id gives us the id of the teacher assigned to the course. 
             * $teachers gives us the list of all teachers 
             * course teacher(1st line) - we are plucking the first and last name of the teacher from $teachers whose id matches with the teacher id in the enrolled course. this helps us find out the assigned course teacher and echoes it on the dashboard and just calling teachername in the dashboard.
             *  whereas $course_teacher (second line) gets the teachers row of the tacher whose id matches with the provided teacher_id and we specify teachername->firstname . ' ' . teachername->lastname in the dashboard
             * students gets us the row of user(student) whose id is the same as the user id of the students who are enrolled in the same course as the user. hence the user_id of classmates 
             * classmates gets us the enrollments with the same course_id as the users course id which we got as a row from course variable
            */
            
            $enrollist = Enrolled::Where('user_id', Auth::user()->id)->first(),

            'enrollist' => $enrollist,

            $course = Course::where('id', $enrollist->course_id)->first(),
            
            $teacher_id = $course->teacher_id, 
            
            $teachers = User::where('role', 1)->get(),

            $course_teacher = $teachers->pluck('firstname', 'id')[$teacher_id] . ' ' . $teachers->pluck('lastname', 'id')[$teacher_id],
            // $course_teacher = $teachers->Where('id', $teacher_id)->first();

            $classmates = Enrolled::where('course_id', $course->id)->get(),

            'students' => User::whereIn('id', $classmates->pluck('user_id'))->get(),

            // 'classmates' => $classmates,

            'course' => $course,

            'teacher_name' => $course_teacher,

            'messages' => Studentinbox::get(),
            
            'events' => Event::all(),

            'studentinboxes' => Studentinbox::all(),

        ]);
    }

    // handles displaying syllabus and fetching variables in student dashboard
    public function studentsyllabus()
    {
        return view('dashboards.student_dash.dashboard_syllabus', [

            $enrollist = Enrolled::Where('user_id', Auth::user()->id)->first(),

            $course = Course::where('id', $enrollist->course_id)->first(),
            
            $teacher_id = $course->teacher_id, 
            
            $teachers = User::where('role', 1)->get(),

            $course_teacher = $teachers->pluck('firstname', 'id')[$teacher_id] . ' ' . $teachers->pluck('lastname', 'id')[$teacher_id],

            'course' => $course,

            'teacher_name' => $course_teacher,
            
            'messages' => Studentinbox::get(),

            'syllabus' => Syllabus::Where('course_id', $course->id)->get(),

        ]);
    }

    // handles displaying syllabus and fetching variables in student dashboard
    public function studenthomework()
    {
        return view('dashboards.student_dash.dashboard_homework', [

            $enrollist = Enrolled::Where('user_id', Auth::user()->id)->first(),

            $course = Course::where('id', $enrollist->course_id)->first(),
            
            $teacher_id = $course->teacher_id, 
            
            $teachers = User::where('role', 1)->get(),

            $course_teacher = $teachers->pluck('firstname', 'id')[$teacher_id] . ' ' . $teachers->pluck('lastname', 'id')[$teacher_id],

            'course' => $course,

            'teacher_name' => $course_teacher,
            
            'messages' => Studentinbox::get(),

        ]);
    }

    // handles displaying examroutine and fetching variables in student dashboard
    public function studentexamroutine()
    {
        return view('dashboards.student_dash.dashboard_examroutine', [
            
            $enrollist = Enrolled::Where('user_id', Auth::user()->id)->first(),

            $course = Course::where('id', $enrollist->course_id)->first(),
            
            $teacher_id = $course->teacher_id, 
            
            $teachers = User::where('role', 1)->get(),

            $course_teacher = $teachers->pluck('firstname', 'id')[$teacher_id] . ' ' . $teachers->pluck('lastname', 'id')[$teacher_id],

            'course' => $course,

            'teacher_name' => $course_teacher,
            
            'messages' => Studentinbox::get(),

        ]);
    }

    public function studentexamresult()
    {
        return view('dashboards.student_dash.dashboard_examresult', [
            
            $enrollist = Enrolled::Where('user_id', Auth::user()->id)->first(),

            $course = Course::where('id', $enrollist->course_id)->first(),
            
            $teacher_id = $course->teacher_id, 
            
            $teachers = User::where('role', 1)->get(),

            $course_teacher = $teachers->pluck('firstname', 'id')[$teacher_id] . ' ' . $teachers->pluck('lastname', 'id')[$teacher_id],

            'course' => $course,

            'teacher_name' => $course_teacher,
            
            'messages' => Studentinbox::get(),

        ]);
    }

    public function studentinbox()
    {
        return view('dashboards.student_dash.dashboard_inbox', [

            $enrollist = Enrolled::Where('user_id', Auth::user()->id)->first(),

            $course = Course::where('id', $enrollist->course_id)->first(),
            
            $teacher_id = $course->teacher_id, 
            
            $teachers = User::where('role', 1)->get(),

            $course_teacher = $teachers->pluck('firstname', 'id')[$teacher_id] . ' ' . $teachers->pluck('lastname', 'id')[$teacher_id],

            'course' => $course,

            'teacher_name' => $course_teacher,
            
            'messages' => Studentinbox::get(),

            'studentinboxes' => Studentinbox::all(),

            'teacherinboxes' => Teachersinbox::all(),

        ]);
    }

    public function studentevent()
    {
        return view('dashboards.student_dash.dashboard_event', [

            $enrollist = Enrolled::Where('user_id', Auth::user()->id)->first(),

            $course = Course::where('id', $enrollist->course_id)->first(),
            
            $teacher_id = $course->teacher_id, 
            
            $teachers = User::where('role', 1)->get(),

            $course_teacher = $teachers->pluck('firstname', 'id')[$teacher_id] . ' ' . $teachers->pluck('lastname', 'id')[$teacher_id],

            'course' => $course,

            'teacher_name' => $course_teacher,
            
            'messages' => Studentinbox::get(),

            'studentinboxes' => Studentinbox::all(),

            'teacherinboxes' => Teachersinbox::all(),

            'events' => Event::all(),

        ]);
    }

    // teachers functions

    public function teacherindex()
    {
        // $course = Enrolled::all();
        $teachers = User::Where('role', 1)->get();
        $course = Course::Where('teacher_id', Auth::user()->id)->first();
        $course_teacher = $teachers->where('id', $course->teacher_id)->first();
        
        return view('dashboards.teacher_dash.dashboard', [
            
            'course' => $course,
            'messages' => Teachersinbox::get(),
            'events' => Event::get(),
            // dd($course_teacher),
            'course_teacher' => $course_teacher,

            // 'students' => User::Where('id', $course->course_id)->get()->all()
            $students = User::Where('role', 0),

            $courseStudents = $students->Where('course', $course->id)->get(),
            
            'students' => $courseStudents
            // dd($students)
            
        ]);
    }

    public function teachersyllabus()
    {
        $course = Course::Where('teacher_id', Auth::user()->id)->first();
        $teachers = User::Where('role', 1)->get();
        $course_teacher = $teachers->where('id', $course->teacher_id)->first();
        $syllabus = Syllabus::Where('course_id', $course->id)->get();


        return view('dashboards.teacher_dash.dashboard_syllabus', [
            'course' => $course,
            'syllabus' => $syllabus,
            'course_teacher' => $course_teacher,
        ]);
    }

    public function teacherhomework(Homework $homework)
    {

        $teachers = User::Where('role', 1)->get();
        $course = Course::Where('teacher_id', Auth::user()->id)->first();
        $course_teacher = $teachers->where('id', $course->teacher_id)->first();
        $homeworks = Homework::Where('course_id', $course->id)->get();

        return view('dashboards.teacher_dash.dashboard_homework', [
            'course' => $course,
            'homeworks' => $homeworks,
            'course_teacher' => $course_teacher,
        ]);
    }

    public function teacherexamroutine()
    {
        return view('dashboards.teacher_dash.dashboard_examroutine', [
            // 'course' => Course::Where('teacher_id', Auth::user()->id)->get()
        ]);
    }

    public function teacherexamresult()
    {
        return view('dashboards.teacher_dash.dashboard_examresult', [
            // 'exam' => Course::Where('teacher_id', Auth::user()->id)->get()
        ]);
    }

    public function teacherinbox()
    {
        return view('dashboards.teacher_dash.dashboard_inbox', [
            'messages' => Teachersinbox::get()
        ]);
    }

    public function teacherevent()
    {
        return view('dashboards.teacher_dash.dashboard_event', [
            // 'courses' => Course::latest()->get(), 
            'events' => Event::get()
        ]);
    }

    // admin functions


    public function adminindex(Enrolled $enrolled)
    {
        return view('dashboards.admin_dash.dashboard', [
            // 'course' => Course::Where('teacher_id', Auth::user()->id)->get()
            'students' => User::Where('role', 0)->get(),
            'teachers' => User::Where('role', 1)->get(),
            'courses' => Course::get(),
            'event' => Event::get(),
            'enrolled' => optional($enrolled)
        ]);
    }

    public function adminsyllabus()
    {
        return view('dashboards.admin_dash.dashboard_syllabus', [
            // 'course' => Course::Where('teacher_id', Auth::user()->id)->get()
        ]);
    }

    public function adminhomework()
    {
        return view('dashboards.admin_dash.dashboard_homework', [
            // 'course' => Course::Where('teacher_id', Auth::user()->id)->get()
        ]);
    }

    public function adminexamroutine()
    {
        return view('dashboards.admin_dash.dashboard_examroutine', [
            // 'course' => Course::Where('teacher_id', Auth::user()->id)->get()
        ]);
    }

    // handles displaying results and fetching variables in admin table
    public function adminexamresult()
    {
        return view('dashboards.admin_dash.dashboard_examresult', [
            // 'exam' => Course::Where('teacher_id', Auth::user()->id)->get()
        ]);
    }

    // handles displaying inboxes and fetching variables in admin table
    public function admininbox()
    {
        return view('dashboards.admin_dash.dashboard_inbox', [
            // 'inbox' => Admininbox::latest()->get()
        ]);
    }

    // handles displaying events and fetching variables in admin table
    public function adminevent()
    {
        return view('dashboards.admin_dash.dashboard_event', [
            'course' => Course::latest()->get(),
            'event' => Event::get()
        ]);
    }

    // handles displaying messages and fetching variables in admin table
    public function adminmessage()
    {
        return view('dashboards.admin_dash.dashboard_event', [
            'course' => Course::latest()->get()
        ]);
    }

    // handles displaying students and fetching variables in admin table
    public function adminstudents()
    {
        return view('dashboards.admin_dash.dashboard_students', [
            'course' => Course::latest()->get()
        ]);
    }

    // handles displaying teachers and fetching vars in admin table
    public function adminteachers()
    {
        return view('dashboards.admin_dash.dashboard_teachers', [
            'course' => Course::latest()->get(),
            'teachers' => User::Where('role', 1)->get(),

        ]);
    }
    
    // handles displaying courses and fetching variables in admin table
    public function admincourse()
    {
        return view('dashboards.admin_dash.dashboard_create', [
            'courses' => Course::latest()->get(),
            
            $teachers = User::Where('role', 1)->get(),

            'teachers' => $teachers,

            $courseteacher = Course::join('users', 'users.id', '=', 'courses.teacher_id')
                ->where('users.role', 1)
                ->whereIn('courses.teacher_id', $teachers->pluck('id'))
                ->select('users.*')
                ->distinct()
                ->get()
        ]);
    }














    public function showteacher()
    {
        $course = Course::Where('teacher_id', Auth::user()->id)->get();
    }
}
