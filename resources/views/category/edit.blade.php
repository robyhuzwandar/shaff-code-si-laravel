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
                    
                     <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}

                          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Kategori</label>
                            <input value="{{$category->name}}" type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label>Deskripsi</label>
                            <input value="{{$category->description}}" type="text" class="form-control" name="description">
                            @if ($errors->has('description'))
                            <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
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