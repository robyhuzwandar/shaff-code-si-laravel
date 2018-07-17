@extends('home')
@section('content')
<!-- Main content -->
<div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Tambahkan Member</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-10">
                @include('template.alert')
                <form action="{{ route('member.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label>Nama</label>
                    <input value="" type="text" class="form-control" name="name">
                    @if ($errors->has('name'))
                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                    <label>Alamat</label>
                    <input value="" type="text" class="form-control" name="address">
                    @if ($errors->has('address'))
                    <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('birtday') ? ' has-error' : '' }}">
                    <label>Tanggal lahir</label>
                    <input value="" type="text" class="form-control" name="birtday">
                    @if ($errors->has('birtday'))
                    <span class="help-block"><strong>{{ $errors->first('birtday') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label>No. Telepon</label>
                    <input value="" type="text" class="form-control" name="phone">
                    @if ($errors->has('phone'))
                    <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email</label>
                    <input value="" type="email" class="form-control" name="email">
                    @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('photo') ? ' has-error' : '' }}">
                    <label>Foto</label>
                    <input value="" type="file" class="form-control" name="photo">
                    @if ($errors->has('photo'))
                    <span class="help-block"><strong>{{ $errors->first('photo') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('about') ? ' has-error' : '' }}">
                    <label>Tentang</label>
                    <textarea id="article-ckeditor" class="wysiwyg" name="about" rows="10" cols="80"></textarea>
                    @if ($errors->has('about'))
                    <span class="help-block"><strong>{{ $errors->first('about') }}</strong></span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary btn-flat" name="submit">
                    <span class="glyphicon glyphicon-send"></span> Simpan
                </button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection