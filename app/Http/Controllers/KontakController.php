<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use Validator;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('cek_login');
    }

    public function index()
    {
        $data = Kontak::all();
        return view('kontak.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
        ]);

        $data = new Kontak();
        $data->username = $request->username;
        $data->password = $request->password;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->alamat = $request->alamat;
        $data->save();

        return redirect()->route('kontak.index')->with('alert_message', 'Berhasil menambah data!');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kontak::where('id', $id)->get();
        return view('kontak.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required',
            'email' => 'required',
            'pendidikan_terakhir' => 'required',
            'riwayat_pelatihan' => 'required',
            'riwayat_pekerjaan' => 'required',
        ]);

        $data = Kontak::where('id', $id)->first();
        $data->password = $request->password;
        $data->email = $request->email;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->riwayat_pelatihan = $request->riwayat_pelatihan;
        $data->riwayat_pekerjaan = $request->riwayat_pekerjaan;
        $data->save();

        return redirect()->route('kontak.index')->with('alert_message', 'Berhasil mengubah data!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kontak::where('id', $id)->first();
        $data->delete();

        return redirect()->route('kontak.index')->with('alert_message', 'Berhasil menghapus data!');

    }
}
