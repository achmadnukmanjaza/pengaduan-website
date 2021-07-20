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
                                <form action="/masyarakat/{{$masyarakat->id}}/update" method="POST">
                        {{csrf_field()}}
                            <fieldset enable>
                                <legend>Edit Data Masyarakat</legend>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Nik</label>
                                    <input type="text" name="nik" id="enableTextInput" class="form-control" placeholder="Nik" value="{{$masyarakat->nik}}">
                                </div>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Nama</label>
                                    <input type="text" name="name" id="enableTextInput" class="form-control" placeholder="Nama" value="{{$masyarakat->name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Username</label>
                                    <input type="text" name="username" id="enableTextInput" class="form-control" placeholder="Username" value="{{$masyarakat->username}}">
                                </div>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Telepon</label>
                                    <input type="text" name="tlp" id="enableTextInput" class="form-control" placeholder="Telepon" value="{{$masyarakat->tlp}}">
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