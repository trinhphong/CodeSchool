<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;
use App\Http\Requests\CreateLevelRequest;

class LevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($courseId)
    {
        $levels = Level::where('course_id',$courseId)->get();
        return view('admin/level/index')->with([
            'levels' => $levels,
        ]);
    }

    public function create()
    {
        return view('admin/level/create');
    }

    public function store(CreateLevelRequest $request)
    {
        Level::create([
            'name' => $request->name,
            'description' => $request->description,
            'note' => $request->note,
            'image' => $request->image,
            'course_id' => $request->course_id,
            'slide_id' => $request->slide_id
        ]);
        return redirect()->route('level.index','1')->with('message','Thêm Level Thành Công');
    }

    public function edit(Level $level)
    {
        return view('/admin/level/edit', compact('level'));
    }

    public function update(Request $request, Level $level)
    {
        $level->update($request->all());
        return redirect()->route('level.index','1')->with('message','Cập nhật Level thành công');
    }

    public function destroy(Level $level)
    {
        $level->delete();
        return redirect()->route('level.index','1')->with('message','Đã Xóa Level');
    }
}
