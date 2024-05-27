<?php

namespace App\Http\Controllers;

use App\Models\SPM;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SPMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spm = SPM::where('aktif', 1)->get();
        return view('admin.sismamedikal.listspm', compact('spm'));
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
            $newData = new SPM();
            $newData->spm = $request->spm;
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
    public function show(SPM $sPM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SPM $sPM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $updateData = SPM::find($id);
            $updateData->spm = $request->spm;
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
        $deleteData = SPM::find($id);
        $deleteData->delete();

        return back();
    }
}
