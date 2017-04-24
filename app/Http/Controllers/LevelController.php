<?php

namespace App\Http\Controllers;

use App\Course;
use App\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $levels = Level::all();
        return view('admin/level/index')->with([
            'levels' => $levels,
        ]);
    }

    public function edit(Level $level)
    {
        return view('levels.edit', compact('level'));
    }

    public function update(Request $request, Level $level)
    {
        $level->update($request->all());
        return redirect()->route('level.index')->with('message','update successfully');
    }
}
