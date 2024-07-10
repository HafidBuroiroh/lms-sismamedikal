<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pelatihan;
use App\Models\SubMateri;
use App\Models\Pertanyaan;
use App\Models\ProfilUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function home(){
        $profilUser = ProfilUser::where('id_user', Auth::id())->first();
        $jabatans = Jabatan::where('id', $profilUser->id_jabatan)->with(['sops', 'spms', 'courses', 'materiUmums'])->get();
        return view('user.home', compact(
            'profilUser',
            'jabatans',
        ));
    }

    public function materisop($id){
        $data = SubMateri::where('id_sop', $id)->get();
        return view('user.listmateri', compact('data'));
    }

    public function materispm($id){
        $data = SubMateri::where('id_spm', $id)->get();
        return view('user.listmateri', compact('data'));
    }

    public function matericourse($id){
        $data = SubMateri::where('id_course', $id)->get();
        return view('user.listmateri', compact('data'));
    }

    public function materiumum($id){
        $data = SubMateri::where('id_mu', $id)->get();
        return view('user.listmateri', compact('data'));
    }

    public function submateri($id){
        $materi = SubMateri::find($id);
        return view('user.materi', compact('materi'));
    }

    public function kuisioner($id){
        $kuis = Pertanyaan::where('id_submateri', $id)->get();
        return view('user.kuisioner', compact('kuis'));
    }

    public function pelatihan(){
        $data = Pelatihan::all();
        return view('part.pelatihan', compact('data'));
    }

    public function kuisionerpost(Request $request){
        
    }
}
