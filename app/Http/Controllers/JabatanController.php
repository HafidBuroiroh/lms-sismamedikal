<?php

namespace App\Http\Controllers;

use App\Models\SOP;
use App\Models\SPM;
use App\Models\Course;
use App\Models\Jabatan;
use App\Models\SubMateri;
use App\Models\MateriUmum;
use Illuminate\Http\Request;
use App\Models\JabatanMateri;
use RealRashid\SweetAlert\Facades\Alert;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('admin.sismamedikal.jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sop = SOP::all();
        $spm = SPM::all();
        $course = Course::all();
        $materi = MateriUmum::all();
        return view('admin.sismamedikal.jabatan.create', compact('sop', 'spm', 'course', 'materi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // dd($request);
            $newData = new Jabatan();
            $newData->jabatan = $request->jabatan;
            $newData->save();

            $newJM = new JabatanMateri();
            $newJM->id_jabatan = $newData->id;
            $newJM->id_sop = $request->id_sop;
            $newJM->id_spm = $request->id_spm;
            $newJM->id_course = $request->id_course;
            $newJM->id_mu = $request->id_mu;
            $newJM->save();
            Alert::success('Success', 'Data Tersimpan');
            return redirect('/jabatan');
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
        $detail = Jabatan::find($id);
        return view('admin.sismamedikal.submateri.detail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
