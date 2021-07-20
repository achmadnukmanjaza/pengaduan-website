@extends('layout.master')
@section('isi')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="colmd-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Pengaduan</h3>
                                    @if(auth()->user()->role == 'user')
                                    <a href="{{route('pengaduan.create')}}" class="btn btn-warning btn-sm">Tambah Data</a>
                                    @endif
                                </div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Id Pengaduan</th>
                                                <th>Tanggal Pengaduan</th>
                                                <th>Username</th>
                                                <th>Isi Laporan</th>
                                                <th>status</th>
                                                @if(auth()->user()->role == 'admin')
                                                <th>Action</th>
                                                @endif
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_pengaduan as $pengaduan)
                                            <tr>
                                                <td>{{$pengaduan->id_pengaduan}}</td>
                                                <td>{{$pengaduan->tgl_pengaduan}}</td>    
                                                <td>{{$pengaduan->username}}</td>
                                                <td>{{$pengaduan->isi_laporan}}</td>
                                                <td>{{$pengaduan->status}}</td>
                                                @if(auth()->user()->role == 'admin')
                                                <td>
                                                    <a href="/tanggapan/create/{{$pengaduan->id_pengaduan}}/{{auth()->user()->username}}" class="btn btn-warning">
                                                    Tanggapi
                                                    </a>
                                                    <a href="/pengaduan/{{$pengaduan->id_pengaduan}}/editstatus" class="btn btn-warning">
                                                    Edit Status
                                                    </a>
                                                </td>
                                                @endif
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
