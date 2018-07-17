@extends('home')
@section('content')
    <!-- Main content -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Edit Komunitas</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    @include('template.alert')
                    <form action="{{ route('community.update', $community->id) }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Nama</label>
                            <input value="{{ $community->name}}" type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                            <label>Jenis</label>
                            <input value="{{ $community->type}}" type="text" class="form-control" name="type">
                            @if ($errors->has('type'))
                                <span class="help-block"><strong>{{ $errors->first('type') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
                            <label>Alamat</label>
                            <input value="{{ $community->location}}" type="text" class="form-control" name="location">
                            @if ($errors->has('location'))
                                <span class="help-block"><strong>{{ $errors->first('location') }}</strong></span>
                            @endif
                        </div>         

                         <div class="form-group {{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label>Contact</label>
                            <input value="{{ $community->contact}}" type="text" class="form-control" name="contact">
                            @if ($errors->has('contact'))
                                <span class="help-block"><strong>{{ $errors->first('contact') }}</strong></span>
                            @endif
                        </div>
                           
                        <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
                            <label>Logo</label>
                             <img style="padding: 5px" width="90px" src="{{asset('img/logo_community/'. $community->logo) }}">
                            <input value="{{ $community->logo}}" type="file" class="form-control" name="logo">
                            @if ($errors->has('logo'))
                                <span class="help-block"><strong>{{ $errors->first('logo') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('deskription') ? ' has-error' : '' }}">
                                <label>Deskripsi dan Info Lainnya</label>
                                <textarea id="article-ckeditor" class="wysiwyg" name="deskription" rows="10" cols="80">{{ $community->deskription}}</textarea>
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