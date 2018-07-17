@extends('home')
@section('content')
    <!-- Main content -->
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Data Acara</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Judul kecil</th>
                    <th>Jenis Acara</th>
                    <th>Hari/tgl</th>
                    <th>Waktu</th>
                    <th>Alamat</th>
                    <th>Tempat</th>
                    <th>Organisasi</th>
                    <th>Poster</th>
                    <th>Lainnya</th>
                    <th>Dibuat pada</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($event as $data)
                    <tr>
                        <td width="3%">{{ $loop->index + 1 }}</td>
                        <td id="#" width="16%">{{ $data->title }}</td>
                        <td id="#" width="16%">{{ $data->sub_title }}</td>
                        <td id="#" width="16%">{{ $data->event_type }}</td>
                        <td id="#" width="16%">{{ $data->date }}</td>
                        <td id="#" width="16%">{{ $data->time }}</td>
                        <td id="#" width="16%">{{ $data->address }}</td>
                        <td id="#" width="16%">{{ $data->location }}</td>
                        <td id="#" width="16%">
                            @foreach($community as $c)
                                @if($data->community_id === $c->id)
                                    {{$c->name}}
                                @endif
                            @endforeach
                        </td>
                        <td id="#" width="16%">
                            <img style="width: 40%;" src="{{asset('img/poster_event/'. $data->poster) }}">
                        </td>
                        <td id="#" width="16%">{!! str_limit($data->body, 30) !!}</td>
                        <td id="#" width="16%">{{ $data->created_at }}</td>
                        <td width="16%" class="text-center">
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <a href=""
                                           data-toggle="tooltip" data-placement="top" title="Edit"
                                           class="btn btn-xs btn-info btn-flat">
                                            <i class="glyphicon glyphicon-eye-open"></i> Lihat</a>
                                    </div>

                                    <div class="col col-sm-2">
                                        <a href="{{ route('event.edit', $data->id) }}"
                                           data-toggle="tooltip" data-placement="top" title="Edit"
                                           class="btn btn-xs btn-warning btn-flat">
                                            <i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    </div>

                                    <div class="col col-sm-2">
                                        <form class="" action="{{ route('event.destroy', $data->id)}}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button onclick="window.alert('Hapus pelanggan ?')" type="submit"
                                                    data-toggle="tooltip" data-placement="top" title="Hapus"
                                                    name="button" class="btn btn-xs btn-danger btn-flat"><span
                                                        class="glyphicon glyphicon-trash"></span> Hapus</button>
                                        </form>
                                    </div>
                                </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection