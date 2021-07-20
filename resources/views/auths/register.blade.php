<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Data </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
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
                            <form action="{{route('registrasi.store')}}" method="POST">
                            {{csrf_field()}}
                            <fieldset enable>
                                <legend>Register</legend>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Nik</label>
                                    <input type="text" name="nik" id="enableTextInput" class="form-control" placeholder="Nik" >
                                </div>
                                <div class="mb-3">
                                    <label for="enableTextInput" class="form-label">Nama</label>
                                    <input type="text" name="name" id="enableTextInput" class="form-control" placeholder="Nama" >
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
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- END WRAPPER -->
</body>

</html>
 