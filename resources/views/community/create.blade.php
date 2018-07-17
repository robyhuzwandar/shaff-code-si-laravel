@extends('home')
@section('content')
    <!-- Main content -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Komunitas</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    @include('template.alert')
                    <form action="{{ route('community.store') }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Nama</label>
                            <input value="{{old('name')}}" type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                            <label>Jenis</label>
                            <input value="{{old('type')}}" type="text" class="form-control" name="type">
                            @if ($errors->has('type'))
                                <span class="help-block"><strong>{{ $errors->first('type') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
                            <label>Alamat</label>
                            <input value="{{old('location')}}" type="text" class="form-control" name="location">
                            @if ($errors->has('location'))
                                <span class="help-block"><strong>{{ $errors->first('location') }}</strong></span>
                            @endif
                        </div>   

                        <div class="form-group {{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label>Contact</label>
                            <input value="{{old('contact')}}" type="text" class="form-control" name="contact">
                            @if ($errors->has('contact'))
                                <span class="help-block"><strong>{{ $errors->first('contact') }}</strong></span>
                            @endif
                        </div>         

                        <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
                            <label>Logo</label>
                            <input value="{{old('logo')}}" type="file" class="form-control" name="logo">
                            @if ($errors->has('logo'))
                                <span class="help-block"><strong>{{ $errors->first('logo') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('deskription') ? ' has-error' : '' }}">
                                <label>Deskripsi dan Info Lainnya</label>
                                <textarea id="article-ckeditor" class="wysiwyg" name="deskription" rows="10" cols="80">{{old('deskription')}}</textarea>
                                @if ($errors->has('deskription'))
                                    <span class="help-block"><strong>{{ $errors->first('deskription') }}</strong></span>
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