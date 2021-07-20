<?php

namespace App\Http\Controllers;
use \App\User;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function petugas()
        {
            $data_petugas = User::where('role','admin')->get();
            return view('petugas.petugas',['data_petugas' => $data_petugas]);
        }
    public function create(Request $request)
        {
            return view('petugas/tambahpetugas');
        }
    public function store(Request $request)
        {
            \App\User::create($request->all());
            return redirect('/petugas')->with('sukses','Data Berhasil Ditambah'); 
        }
    public function editpetugas($id_petugas)
        {
            $petugas = \App\User::find($id_petugas);
            return view('petugas/editpetugas',['petugas' => $petugas]);
        }
        public function update(Request $request,$id_petugas)
        {
            $petugas = \App\User::find($id_petugas);
            $petugas->update($request->all());
            return redirect('/petugas')->with('sukses','Data Berhasil Diedit');
        }
        public function delete($id_petugas)
        {
            $petugas = \App\User::find($id_petugas);
            $petugas->delete($id_petugas);
            return redirect('/petugas')->with('sukses','Data Berhasil Dihapus');
        }
}
