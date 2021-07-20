@extends('layout.master')
@section('isi')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="colmd-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Masyarakat</h3>
                                    <a href="{{route('masyarakat.create')}}" class="btn btn-warning btn-sm">Tambah Data</a>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Nik</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Telepon</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_masyarakat as $masyarakat)
                                            <tr>
                                                <td>{{$masyarakat->nik}}</td>
                                                <td>{{$masyarakat->name}}</td>    
                                                <td>{{$masyarakat->username}}</td>
                                                <td>{{$masyarakat->tlp}}</td>
                                                <td>
                                                    <a href="/masyarakat/{{$masyarakat->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/masyarakat/{{$masyarakat->id}}/delete" class="btn btn-warning btn-sm" onclick="return confirm ('Anda Yakin Ingin Menghapus?')">Delete</a>
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
