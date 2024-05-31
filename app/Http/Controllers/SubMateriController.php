<?php

namespace App\Http\Controllers;

use App\Models\SOP;
use App\Models\SPM;
use App\Models\Course;
use App\Models\SubMateri;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SubMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $submateri = SubMateri::all();
        return view('admin.sismamedikal.submateri.index', compact('submateri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sop = SOP::all();
        $spm = SPM::all();
        $course = Course::all();
        return view('admin.sismamedikal.submateri.create', compact('sop', 'spm', 'course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // dd($request);
            $newData = new SubMateri();
            $newData->judul_materi = $request->judul_materi;
            $newData->description_materi = $request->description_materi;
            $newData->link_youtube = $request->link_youtube;
            if ($request->id_sop) {
                $newData->id_sop = $request->id_sop;
            }elseif ($request->id_spm) {
                $newData->id_spm = $request->id_spm;
            }elseif ($request->id_course) {
                $newData->id_course = $request->id_course;
            }
            
            if ($request->hasFile('materi')) {
                $file = $request->file('materi');
                $filename = 'Materi' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('file'), $filename);
                $newData->pdf = $filename;
            }
            
            $newData->save();
            Alert::success('Success', 'Data Tersimpan');
            return redirect('/sub-materi');
        } catch (\Throwable $th) {
            Alert::error('Error', $th->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detail = SubMateri::find($id);
        return view('admin.sismamedikal.submateri.detail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubMateri $subMateri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubMateri $subMateri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubMateri $subMateri)
    {
        //
    }
}
