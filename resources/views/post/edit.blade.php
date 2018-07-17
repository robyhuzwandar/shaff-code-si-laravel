@extends('home')
@section('content')
    <!-- Main content -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Edit Post</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    @include('template.alert')
                    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label>Judul</label>
                            <input value="{{ $post->title }}" type="text" class="form-control" name="title">
                            @if ($errors->has('title'))
                                <span class="help-block"><strong>{{ $errors->first('judul') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('cover') ? ' has-error' : '' }}">
                            <label>Foto Sampul</label><br>
                            <img style="padding: 5px" width="90px" src="{{asset('img/cover_artikel/'. $post->cover) }}">
                            <input value="{{ $post->cover }}" type="file" class="form-control" name="cover">
                            @if ($errors->has('cover'))
                                <span class="help-block"><strong>{{ $errors->first('cover') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('article-ckeditor') ? ' has-error' : '' }}">
                            <label>Artikel</label>
                            <textarea id="article-ckeditor" class="wysiwyg form-control" name="artikel" rows="10"
                                      cols="80">{{ $post->body }}</textarea>
                            @if ($errors->has('article-ckeditor'))
                                <span class="help-block"><strong>{{ $errors->first('article-ckeditor') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('kategori') ? ' has-error' : '' }}">
                            <label>Kategori</label>
                            <select class="form-control" name="category">
                                <option class="" disabled selected="false">Pilih</option>
                                @foreach($category as $c)
                                <option
                                @if($post->category_id === $c->id)
                                    selected
                                @endif
                                 value="{{$c->id}}">{{$c->name}}</option>
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