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
                    <form action="{{ route('post.update', $post) }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label>Judul</label>
                            <input value="{{$post->judul}}" type="text" class="form-control" name="judul">
                            @if ($errors->has('judul'))
                                <span class="help-block"><strong>{{ $errors->first('judul') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('article-ckeditor') ? ' has-error' : '' }}">
                            <div class="box-body pad">
                                <textarea id="article-ckeditor" class="wysiwyg" name="artikel" rows="10" cols="80">{{$post->artikel}}</textarea>
                                @if ($errors->has('article-ckeditor'))
                                    <span class="help-block"><strong>{{ $errors->first('article-ckeditor') }}</strong></span>
                                @endif
                            </div>
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