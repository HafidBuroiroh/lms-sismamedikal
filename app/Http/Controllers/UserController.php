<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ProfilUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function unverif(){
        $data = ProfilUser::where('verification', 'unverif')->get();
        return view('admin.sismamedikal.listunverif', compact('data'));
    }

    public function verifuser(Request $request, $id){
        $verif = ProfilUser::find($id);
        $user = User::where('id', $verif->id_user)->first();
        $verif->verification = 'verified';
        $verif->save();

        $mail = [ 
            'kepada' => $user->email,
            'email' => 'lmsmedika@lms-medika.id', 
            'dari' => 'LMS Medika', 
            'subject' => 'Verifikasi Akun',
        ]; 
    
        // Mail::send('verifiedemail', $mail, function($message) use ($mail){ 
        //     $message->to($mail['kepada']) 
        //     ->from($mail['email'], $mail['dari']) 
        //     ->subject($mail['subject']); 
        // });

        Alert::success('success', 'Akun Sudah Terverifikasi, Sistem akan mengirim notifikasi kepada pemilik akun bahwa akun sudah diverifikasi');
        return back();
    }

    public function verif(){
        $data = ProfilUser::where('verification', 'verified')->get();
        return view('admin.sismamedikal.listverif', compact('data'));
    }
}
