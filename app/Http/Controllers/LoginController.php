<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use App\Models\ProfilUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function login(){
        return view('part.login');
    }
    public function suadminlogin(){
        return view('suadmin.login');
    }

    public function postlogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ],[
            'email' => 'Email cant be null',
            'password' => 'Password cant be null',
            'email.exists' => 'Email not found',
            'password.min' => 'Password must be 8 character'
        ]);

        $infologin = [ 
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            $user = auth()->user();
            $profil = ProfilUser::where('id_user', auth()->user()->id)->first();
            if(auth()->user()->level == 1){
                return redirect()->route('sop.index');
            }elseif($user->level == 2 && $profil->verification == 'verified'){
                return redirect('/home');
            }elseif($user->level == 2 && $profil->verification == 'unverif'){
                Alert::info('info', 'Akun Anda Belum Diverifikasi Admin');
                return back();
            }elseif(auth()->user()->level == 99){
                return redirect()->route('superadmin.rs.index');
            }
        }else{
            Alert::error('Error', 'Email or Password incorect');
            return redirect('/login');
        }
    }

    public function register(){
        $jabatan = Jabatan::all();
        return view('part.register', compact('jabatan'));
    }

    public function postregister(Request $request){
        try {
            $newData = new User();
            $newData->name = $request->name;
            $newData->email = $request->email;
            $newData->password = bcrypt($request->password);
            $newData->level = 2;
            $newData->save();

            $newuser = new ProfilUser();
            $newuser->id_jabatan = $request->id_jabatan;
            $newuser->no_telp = $request->no_telp;
            $newuser->id_user = $newData->id;
            $newuser->jenis_kelamin = $request->jenis_kelamin;
            $newuser->verification = 'unverif';
            $newuser->save();
            $mail = [ 
                'kepada' => $newData->email,
                'email' => 'lmsmedika@lms-medika.id', 
                'dari' => 'LMS Medika', 
                'subject' => 'Registrasi',
            ]; 
        
            // Mail::send('sendemail', $mail, function($message) use ($mail){ 
            //     $message->to($mail['kepada']) 
            //     ->from($mail['email'], $mail['dari']) 
            //     ->subject($mail['subject']); 
            // });
            Alert::success('success', 'Pendaftaran Berhasil! Cek Email anda');
            return redirect('/login');
        } catch (\Throwable $th) {
            Alert::error('error', $th->getMessage());
            return back();
        }
    }
    

    public function logout(Request $req){
        Auth::logout();
        return redirect('/');
    }
}
