<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    public function tanggapan()
        {
            $data_tanggapan = \App\tanggapan::all();
            return view('tanggapan.tanggapan',['data_tanggapan' => $data_tanggapan]);
        }
    public function create(Request $request)
        {
            return view('tanggapan/tambahtanggapan');
        }
    public function store(Request $request,$id_pengaduan,$username)
        {
            \App\tanggapan::create([
                'id_tanggapan' => $request->get('id_tanggapan'),
                'tanggal_tanggapan' => $request->get('tanggal_tanggapan'),
                'tanggapan' => $request->get('tanggapan'),
                'username' => $username, 
                'id_pengaduan' => $id_pengaduan
            ]);
            return redirect('/tanggapan')->with('sukses','Data Berhasil Ditambah');
        }
}
