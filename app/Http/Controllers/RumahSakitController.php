<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ProfilRumahSakit;
use RealRashid\SweetAlert\Facades\Alert;

class RumahSakitController extends Controller
{
    public function index()
    {
        $users = User::with('profilRumahSakit')->where('level', 1)->where('status', 1)->paginate(10);
        return view('suadmin.rs.index', compact(
            'users',
        ));
    }

    public function create()
    {
        return view('suadmin.rs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable',
            'logo' => 'required|file',
            'logo_polos' => 'nullable|file',
            'deskripsi_singkat' => 'required',
            'tentang_rs' => 'required',
            'tone_warna' => 'required',
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request->input('password') ? bcrypt($request->input('password')) : bcrypt('12345678'),
            'level' => 1,
        ]);

        $profilRumahSakit = [
            'id_user' => $user->id,
            'deskripsi_singkat' => $request['deskripsi_singkat'],
            'tentang_rs' => $request['tentang_rs'],
            'tone_warna' => $request['tone_warna'],
            'logo' => $this->handleFileUpload($request->file('logo'), 'file/rumah-sakit/logo/'),
            'logo_polos' => $request->hasFile('logo_polos') ? $this->handleFileUpload($request->file('logo_polos'), 'file/rumah-sakit/logo-polos/') : null,
        ];

        ProfilRumahSakit::create($profilRumahSakit);

        Alert::success('Success', 'Success');
        return redirect()->route('rs.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::with('profilRumahSakit')->find($id);
        return view('suadmin.rs.edit', compact(
            'user',
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable',
            'logo' => 'nullable|file',
            'logo_polos' => 'nullable|file',
            'deskripsi_singkat' => 'required',
            'tentang_rs' => 'required',
            'tone_warna' => 'required',
        ]);

        $user = User::find($id);

        $userData = [
            'name' => $request['name'],
            'email' => $request['email'],
        ];

        if ($request->has('password')) {
            $userData['password'] = bcrypt($request->input('password'));
        }

        $user->update($userData);

        $profilRumahSakit = $user->profilRumahSakit;

        $profilRumahSakits = [
            'deskripsi_singkat' => $request['deskripsi_singkat'],
            'tentang_rs' => $request['tentang_rs'],
            'tone_warna' => $request['tone_warna'],
        ];

        if ($request->hasFile('logo')) {
            $profilRumahSakits['logo'] = $this->handleFileUpload($request->file('logo'), 'file/rumah-sakit/logo/');
        }

        if ($request->hasFile('logo_polos')) {
            $profilRumahSakits['logo_polos'] = $this->handleFileUpload($request->file('logo_polos'), 'file/rumah-sakit/logo-polos/');
        }

        $profilRumahSakit->update($profilRumahSakits);

        Alert::success('Success', 'Success');
        return redirect()->route('rs.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->update([
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
