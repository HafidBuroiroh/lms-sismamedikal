<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $user = ProfilUser::where('id_user', Auth::id())->first();
        $jabatan = Jabatan::where('id', $user->id_jabatan)->get();
        return view('user.home', compact('user','jabatan'));
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
