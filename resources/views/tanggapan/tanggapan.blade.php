@extends('layout.master')
@section('isi')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="colmd-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Tanggapan</h3>
                                </div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Id Pengaduan</th>
                                                <th>Id Tanggapan</th>
                                                <th>Tanggal Tanggapan</th>
                                                <th>Tanggapan</th>
                                                <th>Username Petugas</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_tanggapan as $tanggapan)
                                            <tr>
                                                <td>{{$tanggapan->id_tanggapan}}</td>
                                                <td>{{$tanggapan->id_pengaduan}}</td>    
                                                <td>{{$tanggapan->tanggal_tanggapan}}</td>
                                                <td>{{$tanggapan->tanggapan}}</td>
                                                <td>{{$tanggapan->username}}</td>
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
