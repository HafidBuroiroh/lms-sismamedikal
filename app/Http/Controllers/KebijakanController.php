<?php

namespace App\Http\Controllers;

use App\Models\Kebijakan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KebijakanController extends Controller
{
    public function index()
    {
        $kebijakans = Kebijakan::where('status', 1)->paginate(10);
        return view('suadmin.kebijakan.index', compact(
            'kebijakans',
        ));
    }

    public function create()
    {
        return view('suadmin.kebijakan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'required|file',
        ]);

        $kebijakan = [
            'judul' => $request['judul'],
            'deskripsi' => $request['deskripsi'],
            'file' => $this->handleFileUpload($request->file('file'), '/file/kebijakan/'),
        ];

        Kebijakan::create($kebijakan);

        Alert::success('Success', 'Success');
        return redirect()->route('kebijakan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kebijakan = Kebijakan::find($id);
        return view('suadmin.kebijakan.edit', compact(
            'kebijakan',
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'nullable|file',
        ]);


        $kebijakan = Kebijakan::find($id);

        $kebijakans = [
            'judul' => $request['judul'],
            'deskripsi' => $request['deskripsi'],
        ];

        if ($request->hasFile('file')) {
            $kebijakans['file'] = $this->handleFileUpload($request->file('file'), 'file/kebijakan/');
        }

        $kebijakan->update($kebijakans);

        Alert::success('Success', 'Success');
        return redirect()->route('kebijakan.index');
    }

    public function destroy($id)
    {
        $kebijakan = Kebijakan::find($id);

        $kebijakan->update([
            'status' => 0,
        ]);

        Alert::success('Success', 'Success');
        return redirect()->route('kebijakan.index');
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
