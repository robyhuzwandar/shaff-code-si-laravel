@extends('home')
@section('content')
    <!-- Main content -->
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Data Post</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Artikel</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Foto Sampul</th>
                    <th>Di Tulis pada</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($post as $p)
                    <tr>
                        <td width="3%">{{ $loop->index + 1 }}</td>
                        <td id="#" width="16%">{{ $p->title }}</td>
                        <td id="#" width="16%">{!! $p->body !!}</td>
                        @foreach($category as $c)
                            <td id="#" width="16%">
                            @if($p->category_id === $c->id)
                                {{$c->name}}
                            @endif
                            </td>
                        @endforeach

                        @foreach($user as $u)
                            <td id="#" width="16%">
                            @if($p->user_id === $u->id)
                                {{$u->name}}
                            @endif
                            </td>
                        @endforeach

                        <td id="#" width="16%"><img style="width: 40%" src="{{ asset('img/cover_artikel/'. $p->cover) }}"></td>
                        <td id="#" width="16%">{{ $p->created_at }}</td>
                        <td width="16%" class="text-center">
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <a target="_blank" href="{{route('frontend.artikel_detail', $p->id)}}"
                                           data-toggle="tooltip" data-placement="top" title="Edit"
                                           class="btn btn-xs btn-info btn-flat">
                                            <i class="glyphicon glyphicon-eye-open"></i> Lihat</a>
                                    </div>

                                    <div class="col col-sm-2">
                                        <a href="{{ route('post.edit', $p->id) }}"
                                           data-toggle="tooltip" data-placement="top" title="Edit"
                                           class="btn btn-xs btn-warning btn-flat">
                                            <i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    </div>

                                    <div class="col col-sm-2">
                                        <form class="" action="{{ route('post.destroy', $p->id)}}" method="post">
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