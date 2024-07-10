<?php

namespace App\Http\Controllers;

use App\Models\SOP;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SOPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sop = SOP::where('aktif', 1)->get();
        return view('admin.sismamedikal.listsop', compact('sop'));
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
            $newData = new SOP();
            $newData->sop = $request->sop;
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
    public function show(SOP $sOP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SOP $sOP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $updateData = SOP::find($id);
            $updateData->sop = $request->sop;
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
        $deleteData = SOP::find($id);
        $deleteData->delete();

        return back();
    }
}
