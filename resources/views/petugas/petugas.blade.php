@extends('layout.master')
@section('isi')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="colmd-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Petugas</h3>
                                    <!-- <a href="{{route('petugas.create')}}" class="btn btn-warning btn-sm">Tambah Data Petugas</a> -->
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Id Petugas</th>
                                                <td>Nik</td>
                                                <th>Nama Petugas</th>
                                                <th>Username</th>
                                                <th>Telepon</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_petugas as $petugas)
                                            <tr>
                                                <td>{{$petugas->id}}</td>
                                                <td>{{$petugas->nik}}</td>
                                                <td>{{$petugas->name}}</td>    
                                                <td>{{$petugas->username}}</td>
                                                <td>{{$petugas->tlp}}</td>
                                                <td>
                                                    <a href="/petugas/{{$petugas->id}}/editpetugas" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/petugas/{{$petugas->id}}/delete" class="btn btn-warning btn-sm" onclick="return confirm ('Anda Yakin Ingin Menghapus?')">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
