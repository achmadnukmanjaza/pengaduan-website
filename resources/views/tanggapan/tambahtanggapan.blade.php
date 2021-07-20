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
                                <form action="/tanggapan/store/{{Route::input('id_pengaduan')}}/{{Route::input('nik')}}" method="POST">
                        {{csrf_field()}}
                            <fieldset enable>
                                <legend>Tambah Data Tanggapan</legend>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Tanggal Tanggapan</label>
                                    <input type="date" name="tanggal_tanggapan" id="enableTextInput" class="form-control" placeholder="Tanggal Tanggapan" >
                                </div>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Tanggapan</label>
                                    <input type="text" name="tanggapan" id="enableTextInput" class="form-control" placeholder="Tanggapan" >
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