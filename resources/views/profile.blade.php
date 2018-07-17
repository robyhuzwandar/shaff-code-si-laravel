@extends('home')
@section('content')
    <!-- Main content -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Profil</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                        <img class="img-circle" height="150px"
                             src="{{ asset('/img/photo_member/'. Auth::user()->photo) }}"
                             alt="User Pic">
                    </div>
                    <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                        <img class="img-circle" height="40px"
                             src="{{ asset('/img/photo_member/'. Auth::user()->photo) }}"
                             alt="User Pic">
                    </div>
                    <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                        <strong>Profil</strong><br>
                        <dl>
                            <dt>User level:</dt>
                            <dd>
                                @if(Auth::user()->role == 0)
                                    Kepala Admin
                                @elseif(Auth::user()->role == 1)
                                    Staf
                                @endif
                            </dd>
                            <dt>Registered since:</dt>
                            <dd>{{Auth::user()->create_at}}</dd>
                            <dt>Alamat</dt>
                            <dd>{{Auth::user()->alamat}}</dd>
                            <dt>Email</dt>
                            <dd>{{Auth::user()->email}}</dd>
                            <dt>No Hp</dt>
                            <dd>{{Auth::user()->nohp}}</dd>
                        </dl>
                    </div>
                    <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                        <strong>Tentang</strong><br>
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>{{Auth::user()->name}}</td>
                            </tr>
                             <tr>
                                <td>Tanggal Lahir</td>
                                <td>{{Auth::user()->birtday}}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{Auth::user()->address}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{Auth::user()->email}}</td>
                            </tr>
                            <tr>
                                <td>No Hp</td>
                                <td>{{Auth::user()->phone }}</td>
                            </tr>
                            <tr>
                                <td>Tentang</td>
                                <td>{{Auth::user()->about }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="/" class="btn btn-sm btn-primary" type="button"
                   data-toggle="tooltip"
                   data-original-title="Send message to user"><i class="glyphicon glyphicon-arrow-left"></i></a>
                <span class="pull-right">
                    <a href="" class="btn btn-sm btn-warning" type="button"
                       data-toggle="tooltip"
                       data-original-title="Edit this user"><i
                                class="glyphicon glyphicon-edit"></i></a>
                </span>
            </div>
        </div>
    </div>
@endsection