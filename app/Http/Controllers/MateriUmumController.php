<?php

namespace App\Http\Controllers;

use App\Models\MateriUmum;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MateriUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = MateriUmum::all();
        return view('admin.sismamedikal.materi', compact('materi'));
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
            $newData = new MateriUmum();
            $newData->materi = $request->materi;
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
    public function show($id)
    {
        //
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
        try {
            $updateData = MateriUmum::find($id);
            $updateData->materi = $request->materi;
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
        $deleteData = MateriUmum::find($id);
        $deleteData->delete();

        return back();
    }
}
