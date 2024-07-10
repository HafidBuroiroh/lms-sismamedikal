<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::where('aktif', 1)->get();
        return view('admin.sismamedikal.course', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $newData = new Course();
            $newData->course = $request->course;
            $newData->deskripsi = $request->deskripsi;
            $newData->aktif = 1;
            $newData->save();

            Alert::success('Success', 'Data Berhasil Dibuat');
            return back();
        } catch (\Throwable $th) {
            Alert::error('Error', $th->getMessage());
            return back();
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $updateData = Course::find($id);
            $updateData->course = $request->course;
            $updateData->deskripsi = $request->deskripsi;
            $updateData->save();

            Alert::success('Success', 'Data Berhasil Diubah');
            return back();
        } catch (\Throwable $th) {
            Alert::error('Error', $th->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleteData = Course::find($id);
        $deleteData->delete();
        return back();
    }
}
