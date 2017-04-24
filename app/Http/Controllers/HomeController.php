<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Level;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data_course = Course::where('id', '1')->first();
        $data_level = Level::all();
        return view('/client/home/home')->with([
            'course' => $data_course,
            'list_levels' => $data_level
        ]);
    }
}
