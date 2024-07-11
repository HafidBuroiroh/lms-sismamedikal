<?php

namespace App\Http\Controllers;

use App\Models\SOP;
use App\Models\SPM;
use App\Models\Course;
use App\Models\SubMateri;
use App\Models\MateriUmum;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $materi = MateriUmum::all();
        return view('admin.sismamedikal.submateri.create', compact('sop', 'spm', 'course', 'materi'));
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
            }elseif ($request->id_mu) {
                $newData->id_mu = $request->id_mu;
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
    public function edit($id)
    {
        $data = SubMateri::find($id);
        $sop = SOP::all();
        $spm = SPM::all();
        $course = Course::all();
        $materi = MateriUmum::all();
        return view('admin.sismamedikal.submateri.edit', compact('data', 'sop', 'spm', 'course', 'materi'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            // dd($request);
            $updateddata = SubMateri::find($id);
            $updateddata->judul_materi = $request->judul_materi;
            $updateddata->description_materi = $request->description_materi;
            $updateddata->link_youtube = $request->link_youtube;
            if ($request->id_sop) {
                $updateddata->id_sop = $request->id_sop;
            }elseif ($request->id_spm) {
                $updateddata->id_spm = $request->id_spm;
            }elseif ($request->id_course) {
                $updateddata->id_course = $request->id_course;
            }elseif ($request->id_mu) {
                $updateddata->id_mu = $request->id_mu;
            }
            
            if ($request->hasFile('materi')) {
                $file = $request->file('materi');
                $filename = 'Materi' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('file'), $filename);
                $updateddata->pdf = $filename;
            }
            
            $updateddata->save();
            Alert::success('Success', 'Data Tersimpan');
            return redirect('/sub-materi');
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
        $delete = SubMateri::find($id);
        $filePath = 'file/' . $delete->pdf;
        if(File::exists($filePath)){
            File::delete($filePath);
        }
        $delete->delete();

        return back();
    }

    public function pertanyaan($id){
        $materi = SubMateri::with('pertanyaans')->find($id);
        return view('admin.sismamedikal.submateri.pertanyaan.index', compact('materi'));
    }

    public function pertanyaanCreate($id){
        $materi = SubMateri::find($id);
        $tanya = Pertanyaan::where('id_submateri', $id)->get();
        return view('admin.sismamedikal.submateri.pertanyaan.create', compact('tanya', 'materi'));
    }

    public function pertanyaanStore(Request $request, $id)
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
            return redirect()->route('sub-materi.pertanyaan', $id);
        } catch (\Throwable $th) {
            Alert::error('error', $th->getMessage());
            return back();
        }
    }
}
