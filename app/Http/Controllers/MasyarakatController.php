<?php

namespace App\Http\Controllers;
use \App\User;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function masyarakat()
        {
            $data_masyarakat = User::where('role','user')->get();
            return view('masyarakat.masyarakat',['data_masyarakat' => $data_masyarakat]);
        }
    public function create(Request $request)
        {
            return view('masyarakat/tambah');
        }
    public function store(Request $request)
        {
            \App\User::create($request->all());
            return redirect('/masyarakat')->with('sukses','Data Berhasil Ditambah');
        }
    public function edit($id_masyarakat)
        {
            $masyarakat = \App\User::find($id_masyarakat);
            return view('masyarakat/edit',['masyarakat' => $masyarakat]);
        }
        public function update(Request $request,$id_masyarakat)
        {
            $masyarakat = \App\User::find($id_masyarakat);
            $masyarakat->update($request->all());
            return redirect('/masyarakat')->with('sukses','Data Berhasil Diedit');
        }
        public function delete($id_masyarakat)
        {
            $masyarakat = \App\User::find($id_masyarakat);
            $masyarakat->delete($id_masyarakat);
            return redirect('/masyarakat')->with('sukses','Data Berhasil Dihapus');
        }
}
