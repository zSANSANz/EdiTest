<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function cek(Request $req)
    {
        $this->validate($req, [
            'email'=>'required',
            'password'=>'required'
        ]);
        $proses = Kontak::where('email',$req->email)->where('password',$req->password)->first();
        if($proses!="") {
            Session::put('id_kontak',$proses->id_kontak);
            Session::put('username',$proses->username);
            Session::put('password',$proses->password);
            Session::put('nama',$proses->nama);
            Session::put('login_status',true);
            return redirect('/kontak');
        } else {
            Session::flash('alert_pesan','email dan password tidak cocok');
            return redirect('login');
        }

    }

    public function logout()
    {
        Session::flush();
        return redirect('login');

    }

    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email' => 'required',
            
        ]);

        $data = new Kontak();
        $data->password = $request->password;
        $data->email = $request->email;
        $data->save();

        return redirect()->route('kontak.index')->with('alert_message', 'Berhasil menambah data!');

    }

}
