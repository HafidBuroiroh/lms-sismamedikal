<?php

namespace App\Http\Controllers;

use App\Models\SubMateri;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Imports\PertanyaanImport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\PertanyaanTemplateExport;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = SubMateri::all();
        $tanya = Pertanyaan::all();
        return view('admin.sismamedikal.pertanyaan.index', compact('tanya', 'materi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $submateri = SubMateri::all();
        return view('admin.sismamedikal.pertanyaan.create', compact('submateri'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'pertanyaan.*' => 'required',
            'option_1.*' => 'required',
            'option_2.*' => 'required',
            'option_3.*' => 'required',
            'option_4.*' => 'required',
            'option_5.*' => 'required',
            'true_option.*' => 'required',
        ]);
        try {
            foreach ($data['pertanyaan'] as $index => $pertanyaan) {
                Pertanyaan::create([
                    'id_submateri' => $request->id_submateri,
                    'pertanyaan' => $pertanyaan,
                    'option_1' => $data['option_1'][$index],
                    'option_2' => $data['option_2'][$index],
                    'option_3' => $data['option_3'][$index],
                    'option_4' => $data['option_4'][$index],
                    'option_5' => $data['option_5'][$index],
                    'true_option' => $data['true_option'][$index],
                ]);
            }
            Alert::success('success', 'Data Tersimpan');
            return redirect('/pertanyaan');
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

    public function exportTemplate(){
        return Excel::download(new PertanyaanTemplateExport, 'pertanyaan_template.xlsx');
    }

    public function importpertanyaan(Request $request){
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);
        $id_submateri = $request->id_submateri;
        Excel::import(new PertanyaanImport($id_submateri), $request->file('file'));
        Alert::success('success', 'Data Telah Diimport');
        return redirect()->back();
    }
}
