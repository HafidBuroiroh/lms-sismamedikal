<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Jabatan;
use App\Models\Jawaban;
use App\Models\Pelatihan;
use App\Models\SubMateri;
use App\Models\Pertanyaan;
use App\Models\ProfilUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        $materi = SubMateri::with('results', 'results.jawabans')->find($id);
        return view('user.materi', compact('materi'));
    }

    public function kuisioner($id){
        $materi = SubMateri::find($id);
        $pertanyaans = Pertanyaan::where('id_submateri', $id)->get();
        return view('user.kuisioner', compact('materi', 'pertanyaans'));
    }

    public function kuisionerStore(Request $request, $id)
    {
        $request->validate([
            'jawaban' => 'required|array',
            'jawaban.*' => 'required|string',
        ]);

        $totalSkor = 0;

        try {
            foreach ($request->jawaban as $pertanyaan_id => $jawaban) {
                $pertanyaan = Pertanyaan::find($pertanyaan_id);
                if ($jawaban == $pertanyaan->true_option) {
                    $totalSkor += 20;
                }
            }

            $result = Result::create([
                'id_user' => Auth::id(),
                'id_submateri' => $id,
                'skor' => $totalSkor,
                'tanggal_pengerjaan' => now()->setTimezone('Asia/Jakarta'),
            ]);

            foreach ($request->jawaban as $pertanyaan_id => $jawaban) {
                Jawaban::create([
                    'id_result' => $result->id,
                    'id_pertanyaan' => $pertanyaan_id,
                    'jawaban' => $jawaban,
                ]);
            }

            Alert::success('success', 'Jawaban Berhasil Disimpan.');
            return redirect()->route('user.submateri', $id)
                ->with('success', 'Terimakasih telah meluangkan waktu untuk mengisi kuis ini. Kami sangat menghargai partisipasi Anda. Nilai Anda dapat dilihat di bawah ini.');

        } catch (\Throwable $th) {
            Alert::error('error', $th->getMessage());
            return back();
        }
    }

    public function pelatihan(){
        $data = Pelatihan::all();
        return view('part.pelatihan', compact('data'));
    }
}
