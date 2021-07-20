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
                                <form action="{{route('petugas.store')}}" method="POST">
                        {{csrf_field()}}
                            <fieldset enable>
                                <legend>Tambah Data Masyarakat</legend>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Nama Petugas</label>
                                    <input type="text" name="name" id="enableTextInput" class="form-control" placeholder="Nama Petugas" >
                                </div>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Nik</label>
                                    <input type="text" name="nik" id="enableTextInput" class="form-control" placeholder="Nik" >
                                </div>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Username</label>
                                    <input type="text" name="username" id="enableTextInput" class="form-control" placeholder="Username" >
                                </div>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Password</label>
                                    <input type="text" name="password" id="enableTextInput" class="form-control" placeholder="Password" >
                                </div>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Telepon</label>
                                    <input type="text" name="tlp" id="enableTextInput" class="form-control" placeholder="Telepon" >
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