@extends('home')
@section('content')
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Dashboard</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-2 col-md-offset-4 hidden-xs hidden-sm">
                    <table>
                        <tr>
                            <td>
                                <img class="img-circle" height="300px"
                                     src=""
                                     alt="User Pic">
                                <br><br>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>
                                <a href="https://csgnet.wixsite.com/paktel" target="_blank"
                                   class="btn btn-info">
                                    <i class="fa fa-external-link">
                                    Lihat Selengkapnya...
                                    </i>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>


                <div class="col-xs-2 col-xs-offset-2 hidden-md hidden-lg">
                    <table>
                        <tr>
                            <td>
                                <img class="img-circle" height="200px"
                                     src=""
                                     alt="User Pic">
                                <br><br>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>
                                <a href="https://csgnet.wixsite.com/paktel" target="_blank"
                                    class="btn btn-info">Lihat Selengkapnya
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
@endsection