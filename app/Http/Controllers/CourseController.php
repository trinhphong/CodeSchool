<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $data_course = Course::where('id', '1')->first();
        return view('/admin/manager/course')->with([
            'course' => $data_course,
        ]);
    }

    public function edit(Course $course)
    {
        return view('/admin/manager/edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect()->route('course.index')->with('message','update successfully');
    }
}
