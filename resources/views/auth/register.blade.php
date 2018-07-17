<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Registration</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('/assets/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('/assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet"
    href="{{url('/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/assets/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('/assets/dist/css/skins/_all-skins.min.css')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="/login"><b>Admin</b> Shaff Code</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Pendaftaran</p>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <input class="form-control" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email" >{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                    <label>Alamat</label>
                    <input value="{{ old('address') }}" type="text" class="form-control" name="address">
                    @if ($errors->has('address'))
                    <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('birtday') ? ' has-error' : '' }}">
                    <label>Tanggal lahir</label>
                    <input value="{{ old('birtday') }}" type="text" class="form-control" name="birtday">
                    @if ($errors->has('birtday'))
                    <span class="help-block"><strong>{{ $errors->first('birtday') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label>No. Telepon</label>
                    <input value="{{ old('phone') }}" type="text" class="form-control" name="phone">
                    @if ($errors->has('phone'))
                    <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('photo') ? ' has-error' : '' }}">
                    <label>Foto</label>
                    <input value="" type="file" class="form-control" name="photo" required>
                    @if ($errors->has('photo'))
                    <span class="help-block"><strong>{{ $errors->first('photo') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('about') ? ' has-error' : '' }}">
                    <label>Tentang</label>
                    <textarea id="article-ckeditor" class="wysiwyg" name="about" rows="10" cols="43">{{ old('about') }}</textarea>
                    @if ($errors->has('about'))
                    <span class="help-block"><strong>{{ $errors->first('about') }}</strong></span>
                    @endif
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
            <br>
            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
    <!-- jQuery 3 -->
    <script src="{{url('/assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('/assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('/assets/dist/js/adminlte.min.js')}}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>
</html>
