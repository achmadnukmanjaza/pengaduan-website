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
                                <form action="/pengaduan/{{$pengaduan->id_pengaduan}}/update" method="POST">
                        {{csrf_field()}}
                            <fieldset enable>
                                <legend>Edit Status</legend>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select name="status" id="exampleFormControlSelect1" class="form-control">
                                        <option value="Belum Diproses" @if($pengaduan->status == 'Belum Diproses') selected @endif>Belum Diproses</option>
                                        <option value="Proses" @if($pengaduan->status == 'Proses') selected @endif>Proses</option>
                                        <option value="Selesai Proses" @if($pengaduan->status == 'Selesai Proses') selected @endif>Selesai Proses</option>
                                    </select>                                
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning">Update</button>
            </form>
								</div>
							</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@stop