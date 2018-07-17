@extends('home')
@section('content')
    <!-- Main content -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Acara</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    @include('template.alert')
                     <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label>Judul</label>
                            <input value="" type="text" class="form-control" name="title">
                            @if ($errors->has('title'))
                                <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('sub_title') ? ' has-error' : '' }}">
                            <label>Judul Anak</label>
                            <input value="" type="text" class="form-control" name="sub_title">
                            @if ($errors->has('sub_title'))
                                <span class="help-block"><strong>{{ $errors->first('sub_title') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('event_type') ? ' has-error' : '' }}">
                            <label>Jenis Acara</label>
                            <input value="" type="text" class="form-control" name="event_type">
                            @if ($errors->has('event_type'))
                                <span class="help-block"><strong>{{ $errors->first('event_type') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                            <label>Hari/tgl</label>
                            <input value="" type="text" class="form-control" name="date">
                            @if ($errors->has('date'))
                                <span class="help-block"><strong>{{ $errors->first('date') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('time') ? ' has-error' : '' }}">
                            <label>Waktu</label>
                            <input value="" type="text" class="form-control" name="time">
                            @if ($errors->has('time'))
                                <span class="help-block"><strong>{{ $errors->first('time') }}</strong></span>
                            @endif
                        </div>


                         <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                            <label>Alamat</label>
                            <input value="" type="text" class="form-control" name="address">
                            @if ($errors->has('address'))
                                <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
                            @endif
                        </div>


                         <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
                            <label>Tempat</label>
                            <input value="" type="text" class="form-control" name="location">
                            @if ($errors->has('location'))
                                <span class="help-block"><strong>{{ $errors->first('location') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('fee') ? ' has-error' : '' }}">
                            <label>Biaya</label>
                            <input value="" type="text" class="form-control" name="fee">
                            @if ($errors->has('fee'))
                                <span class="help-block"><strong>{{ $errors->first('fee') }}</strong></span>
                            @endif
                        </div>

                          <div class="form-group {{ $errors->has('community') ? ' has-error' : '' }}">
                            <label>Komunitas</label>
                            <select class="form-control" name="community">
                                <option class="" disabled selected="false">Pilih</option>
                                @foreach($community as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('community'))
                                <span class="help-block"><strong>{{ $errors->first('community') }}</strong></span>
                            @endif
                        </div>


                         <div class="form-group {{ $errors->has('poster') ? ' has-error' : '' }}">
                            <label>Poster</label>
                            <input value="" type="file" class="form-control" name="poster">
                            @if ($errors->has('poster'))
                                <span class="help-block"><strong>{{ $errors->first('poster') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('more_info') ? ' has-error' : '' }}">
                        <label>Details</label>
                                <textarea id="article-ckeditor" class="wysiwyg" name="more_info" rows="10" cols="80"></textarea>
                                @if ($errors->has('more_info'))
                                    <span class="help-block"><strong>{{ $errors->first('more_info') }}</strong></span>
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