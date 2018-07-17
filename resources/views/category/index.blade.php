@extends('home')
@section('content')
<!-- Main content -->
<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title">Kategori</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
              <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}

                  <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label>Kategori</label>
                    <input value="" type="text" class="form-control" name="name">
                    @if ($errors->has('name'))
                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                    <label>Deskripsi</label>
                    <input value="" type="text" class="form-control" name="description">
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
    <br>
    @include('template.alert')
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>

            @foreach($category as $p)
            <tr class="item{{ $p->id }}">
                <td width="3%">{{ $loop->index + 1 }}</td>
                <td id="#" width="16%">{{ $p->name }}</td>
                <td id="#" width="16%">{{ $p->description }}</td>
                <td width="16%" class="text-center">
                    <div class="row">
                        <div class="col col-sm-2">
                            <a href="{{ route('category.edit', $p->id) }}"
                             data-TOGGLE="tooltip" data-placement="top" title="Edit"
                             class="edit-modal btn btn-xs btn-warning btn-flat" data-id="{{$p->id}}"
                             data-name="{{$p->name}}">
                             <i class="glyphicon glyphicon-edit"></i> Edit</a>
                         </div>

                         <div class="col col-sm-2">
                         <form class="" action="{{ route('category.destroy', $p->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button onclick="window.alert('Hapus category ?')" type="submit"
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
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fid" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="n">
                        </div>
                    </div>
                </form>
                <div class="deleteContent">
                    Are you Sure you want to delete <span class="dname"></span> ? <span
                    class="hidden did"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn actionBtn" data-dismiss="modal">
                        <span id="footer_action_button" class='glyphicon'> </span>
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

