<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function pengaduan()
        {
            $data_pengaduan = \App\pengaduan::all();
            return view('pengaduan.pengaduan',['data_pengaduan' => $data_pengaduan]);
        }
    public function create(Request $request)
        {
            return view('pengaduan/tambahpengaduan');
        }
        public function store(Request $request,$username)
        {
            \App\pengaduan::create([
                'id_pengaduan' => $request->get('id_pengaduan'),
                'tgl_pengaduan' => $request->get('tgl_pengaduan'),
                'username' => $username,
                'isi_laporan' => $request->get('isi_laporan')
            ]);
            return redirect('/pengaduan')->with('sukses','Data Berhasil Ditambah');
        }
        public function editstatus($id_pengaduan)
        {
            $pengaduan = \App\pengaduan::find($id_pengaduan);
            return view('pengaduan/editstatus',['pengaduan' => $pengaduan]);
        }
        public function update(Request $request,$id_pengaduan)
        {
            $pengaduan = \App\pengaduan::find($id_pengaduan);
            $pengaduan->update($request->all());
            return redirect('/pengaduan')->with('sukses','Data Berhasil Diedit');
        }
}
