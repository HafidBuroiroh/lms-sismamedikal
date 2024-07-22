<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Kebijakan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KebijakanController extends Controller
{
    public function index()
    {
        $kebijakans = Kebijakan::with('jabatan')->where('status', 1)->paginate(10);
        return view('suadmin.kebijakan.index', compact(
            'kebijakans',
        ));
    }

    public function create()
    {
        $jabatans = Jabatan::all();
        return view('suadmin.kebijakan.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_jabatan' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
        ]);

        $kebijakan = [
            'id_jabatan' => $request['id_jabatan'],
            'judul' => $request['judul'],
            'deskripsi' => $request['deskripsi'],
            'link' => $request['link'],
        ];

        Kebijakan::create($kebijakan);

        Alert::success('Success', 'Success');
        return redirect()->route('superadmin.kebijakan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $jabatans = Jabatan::all();
        $kebijakan = Kebijakan::find($id);
        return view('suadmin.kebijakan.edit', compact(
            'kebijakan',
            'jabatans',
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_jabatan' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
        ]);


        $kebijakan = Kebijakan::find($id);

        $kebijakans = [
            'id_jabatan' => $request['id_jabatan'],
            'judul' => $request['judul'],
            'deskripsi' => $request['deskripsi'],
            'link' => $request['link'],
        ];

        $kebijakan->update($kebijakans);

        Alert::success('Success', 'Success');
        return redirect()->route('superadmin.kebijakan.index');
    }

    public function destroy($id)
    {
        $kebijakan = Kebijakan::find($id);

        $kebijakan->update([
            'status' => 0,
        ]);

        Alert::success('Success', 'Success');
        return redirect()->route('superadmin.kebijakan.index');
    }

    private function handleFileUpload($file, $path)
    {
        if ($file) {
            $fileName = date('YmdHis') . rand(999999999, 9999999999) . $file->getClientOriginalName();
            $file->move(public_path($path), $fileName);
            return $fileName;
        }
        return null;
    }
}
