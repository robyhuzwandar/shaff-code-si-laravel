@extends('home')
@section('content')
    <!-- Main content -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Post</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    @include('template.alert')
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label>Judul</label>
                            <input value="{{ old('title') }}" type="text" class="form-control" name="title">
                            @if ($errors->has('title'))
                                <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('cover') ? ' has-error' : '' }}">
                            <label>Foto Sampul</label>
                            <input value="{{ old('cover') }}" type="file" class="form-control" name="cover">
                            @if ($errors->has('cover'))
                                <span class="help-block"><strong>{{ $errors->first('cover') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('artikel') ? ' has-error' : '' }}">
                            <label>Artikel</label>
                            <textarea id="article-ckeditor" class="wysiwyg form-control" name="artikel" rows="10"
                                      cols="80">{{ old('artikel') }}</textarea>
                            @if ($errors->has('artikel'))
                                <span class="help-block"><strong>{{ $errors->first('artikel') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('kategori') ? ' has-error' : '' }}">
                            <label>Kategori</label>
                            <select class="form-control" name="category">
                                <option class="" disabled selected="false">Pilih</option>
                                @foreach($category as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kategori'))
                                <span class="help-block"><strong>{{ $errors->first('kategori') }}</strong></span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary btn-flat" name="submit">
                            <span class="glyphicon glyphicon-send"></span> Publish
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection