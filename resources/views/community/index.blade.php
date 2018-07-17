@extends('home')
@section('content')
    <!-- Main content -->
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Data Komunitas</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Deskripsi</th>
                    <th>Alamat</th>
                    <th>Logo</th>
                    <th>Di Buat Pada</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($community as $data)
                    <tr>
                        <td width="3%">{{ $loop->index + 1 }}</td>
                        <td id="#" width="16%">{{ $data->name }}</td>
                        <td id="#" width="16%">{{ $data->type }}</td>
                        <td id="#" width="16%">{!! $data->deskription !!}</td>
                        <td id="#" width="16%">{{ $data->location }}</td>
                        <td id="#" width="16%">
                            <img style="width: 40%"src="{{ asset('/img/logo_community/'.$data->logo) }}">
                        </td>
                        <td id="#" width="16%">{{ $data->created_at }}</td>
                        <td width="16%" class="text-center">
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <a target="_blank" href="{{route('frontend.community_detail', $data->id)}}"
                                           data-toggle="tooltip" data-placement="top" title="Edit"
                                           class="btn btn-xs btn-info btn-flat">
                                            <i class="glyphicon glyphicon-eye-open"></i> Lihat</a>
                                    </div>

                                    <div class="col col-sm-2">
                                        <a href="{{ route('community.edit', $data->id) }}"
                                           data-toggle="tooltip" data-placement="top" title="Edit"
                                           class="btn btn-xs btn-warning btn-flat">
                                            <i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    </div>

                                    <div class="col col-sm-2">
                                        <form class="" action="{{ route('community.destroy', $data->id)}}" method="post">
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