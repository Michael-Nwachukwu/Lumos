<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Enrolled;
use App\Models\Homework;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class CourseController extends Controller
{
    // show home page
    public function index(Course $course)
    {
        return view('welcome', [
            $courses = Course::latest()->get(),
            'courses' => $courses,
            // // $students = User::Where('role', 1)->get(),
            // // 'students' => User::Where('id', $course->course_id)->get()->all()
            // $students = User::Where('role', 0),

            // $courseStudents = $students->Where('course', $course->id)->get(),
            // // dd($courseStudents),

            // 'students' => $courseStudents
        ]);
    }


    //  show all courses
    public function all()
    {
        return view('all', [
            'courses' => Course::latest()->filter(request(['tag', 'search']))->paginate(4),
        ]);
    }

    // show single course
    public function show(Course $course,)
    {
        return view('show', [
            'course' => $course,

            $teachers = User::where('role', 1)->get(),

            $course_teacher = $teachers->pluck('firstname', 'id')[$course->teacher_id] . ' ' . $teachers->pluck('lastname', 'id')[$course->teacher_id],

            'course_teacher' => $course_teacher,

            $classmates = Enrolled::where('course_id', $course->id)->get(),

            'classmates' => $classmates,

        ]);
    }

    // create a course by admin
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'coursename' => ['required', 'min:3'],
            'teacher_id' => 'required',
            'description' => ['required', 'min:10'],
            'scope' => ['required', 'min:10'],
            'courseprice' => 'required',
        ]);

        // if admin uploads a course image
        if ($request->hasFile('courseimage')) {
            $formFields['courseimage'] = $request->file('courseimage')->store('courseimages', 'public');
        }

        // create course
        Course::create($formFields);

        // redirect
        return redirect('/admin-dashboard')->with('message', 'Course created Successfully');
    }


    public function storeSyllabus(Request $request)
    {

        // dd($request->course_id);

        $formFields = $request->validate([
            'course_id' => 'required',
            'topic' => 'required|string',
        ]);

        // create course
        Syllabus::create($formFields);

        // redirect
        return back()->with('message', 'Syllabus added Successfully');
    }


    public function storeHomework(Request $request)
    {
        // Validate the form data
        $request->validate([
            'course_id' => 'required',
            'title' => 'required',
            'pdf' => 'file|max:10240', // Max file size is 10 MB
            'due_date' => 'required',
        ]);

        // Create a new homework record with the title
        $homework = new Homework([
            'title' => $request->input('title'),
            'course_id' => $request->input('course_id'),
            'due_date' => $request->input('due_date')
        ]);

        // Save the PDF file, if one was uploaded
        if ($request->hasFile('pdf')) {
            // Get the uploaded file
            $pdf = $request->file('pdf');

            // Generate a unique filename for the file
            $filename = $pdf->getClientOriginalName();

            // Save the file to the storage disk with original name
            $pdf->storeAs('pdfs', $filename);

            // Set the PDF filename on the homework record
            $homework->pdf = $filename;
        }

        // Save the homework record to the database
        $homework->save();

        // Redirect back to the form with a success message
        return redirect()->back()->with('message', 'Homework saved successfully!');
    }

    public function updateHomework(Request $request, Homework $homework)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'course_id' => 'required',
            'title' => 'required|string',
            'due_date' => 'required|date',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Handle the uploaded PDF file if provided
        if ($request->hasFile('pdf')) {

            /// Delete the PDF file if it exists
            if ($homework->pdf) {
                Storage::delete("/pdfs/$homework->pdf");
            }

            // Get the uploaded file
            $pdf = $request->file('pdf');

            // Generate a unique filename for the file
            $filename = $pdf->getClientOriginalName();

            // Save the file to the storage disk with original name
            $pdf->storeAs('pdfs', $filename);

            $validatedData['pdf'] = $filename;

        }

        // Update the homework with the validated data
        $homework->update($validatedData);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Task updated successfully');
    }

    public function updateSyllabus(Request $request, Syllabus $syllable) 
    {
        // Validate the form data
        $validatedData = $request->validate([
            'course_id' => 'required',
            'topic' => 'required|string',
        ]);

        // Update the homework with the validated data
        $syllable->update($validatedData);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Scheme updated successfully');
    }

    public function destroySyllabus(Syllabus $syllable)
    {
        $syllable->delete();

        return redirect()->back()->with('success', 'Scheme deleted successfully');
    }

    // delete a task/homework
    public function destroyHomework(Homework $homework)
    {

        // Delete the PDF file if it exists
        if ($homework->pdf) {
            Storage::delete("/pdfs/$homework->pdf");
        }

        $homework->delete();

        return redirect()->back()->with('success', 'Task deleted successfully');
    }

    // download homework pdf
    public function download($id)
    {
        // Get the homework record from the database
        $homework = Homework::findOrFail($id);

        // Get the file contents from the storage disk
        $fileContents = Storage::disk('local')->get("/pdfs/$homework->pdf");

        // Return the file as a download response
        $response = Response::make($fileContents);
        $response->header('Content-Type', 'application/pdf');
        $response->header('Content-Disposition', 'attachment; filename="' . $homework->pdf . '"');
        return $response;
    }
}
