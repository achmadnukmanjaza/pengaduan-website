@extends('layout.master')
@section('isi')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="colmd-12">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
                                <form action="/pengaduan/store/{{auth()->user()->username}}" method="POST">
                        {{csrf_field()}}
                            <fieldset enable>
                                <legend>Tambah Pengaduan Masyarakat</legend>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Tanggal Pengaduan</label>
                                    <input type="date" name="tgl_pengaduan" id="enableTextInput" class="form-control" placeholder="Tanggal Pengaduan" >
                                </div>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Isi Laporan</label>
                                    <input type="text" name="isi_laporan" id="enableTextInput" class="form-control" placeholder="Isi Laporan" >
                                </div>
                                
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning">Submit</button>
            </form>
								</div>
							</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@stop