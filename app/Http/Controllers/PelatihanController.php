<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatihan = Pelatihan::all();
        return view('admin.sismamedikal.pelatihan.index', compact('pelatihan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sismamedikal.pelatihan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $newdata = new Pelatihan();
            $newdata->judul = $request->judul;
            $newdata->deskripsi = $request->deskripsi;
            $newdata->instruktur = $request->instruktur;
            $newdata->kategori = $request->kategori;
            $newdata->sertifikat = $request->sertifikat;
            $newdata->tanggal = $request->tanggal;
            $newdata->biaya = $request->biaya;
            $newdata->link_lms_kemenkes = $request->link_lms_kemenkes;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = 'foto_pelatihan' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('img_pelatihan'), $filename);
                $newdata->foto = $filename;
            }

            $newdata->save();
            Alert::success('success', 'Data Tersimpan');
            return redirect('/list-pelatihan');


        } catch (\Throwable $th) {
            Alert::error('error', $th->getMessage());
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
        $data = Pelatihan::find($id);
        return view('admin.sismamedikal.pelatihan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $updtdata = Pelatihan::find($id);
            $updtdata->judul = $request->judul;
            $updtdata->deskripsi = $request->deskripsi;
            $updtdata->instruktur = $request->instruktur;
            $updtdata->kategori = $request->kategori;
            $updtdata->sertifikat = $request->sertifikat;
            $updtdata->tanggal = $request->tanggal;
            $updtdata->biaya = $request->biaya;
            $updtdata->link_lms_kemenkes = $request->link_lms_kemenkes;
            if ($request->hasFile('foto')) {
                $filePath = 'img_pelatihan/' . $updtdata->foto;
                if(File::exists($filePath)){
                    File::delete($filePath);
                }
                $file = $request->file('foto');
                $filename = 'foto_pelatihan' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('img_pelatihan'), $filename);
                $updtdata->foto = $filename;
            }

            $updtdata->save();
            Alert::success('success', 'Data Tersimpan');
            return redirect('/pelatihan');


        } catch (\Throwable $th) {
            Alert::error('error', $th->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Pelatihan::find($id);
        $filePath = 'img_pelatihan/' . $delete->foto;
        if(File::exists($filePath)){
            File::delete($filePath);
        }
        $delete->delete();

        return back();
    }
}
