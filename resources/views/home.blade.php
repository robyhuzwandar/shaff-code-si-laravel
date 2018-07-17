<!DOCTYPE html>
<html>
<head>
    @include('template.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        @include('template.header')
    </header>
    @include('template.sidebar')
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017-2018 <a href="#">SHAFF CODE</a>.</strong> All rights SHAFF CODE.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>

<script src="{{url('/assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('/assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{url('/assets/dist/js/adminlte.min.js')}}"></script>
<script src="{{url('/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{url('/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{url('/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{url('/assets/dist/js/demo.js')}}"></script>
<script src="{{url('/assets/dist/js/phone.js')}}"></script>
<script src="{{url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('/assets/bower_components/bootstrap/dist/js/bootstrap-datetimepicker.js')}}"></script>
<script src="{{url('/assets/bower_components/ckeditor/ckeditor.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.3/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
<script>
    $('.wysiwyg').ckeditor({
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + $("input[name=_token]").val(),
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + $("input[name=_token]").val()
    });
</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $(document).ready(function () {
        var table = $('#example').DataTable({
            responsive: true,
            dom: 'Bfrtip',

            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        new $.fn.dataTable.FixedHeader(table);
    });

    document.addEventListener('DOMContentLoaded', function () {
        var mySelect = $('#first-disabled2');
        $('#basic1').selectpicker({
            liveSearch: true,
            maxOptions: 1
        });
    });
</script>

<script>
    $('.form_date').datetimepicker({
        language: 'fr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
<script>
    $("#add").click(function () {
        $.ajax({
            type: 'post',
            url: '/category/store',
            data: {
                '_token': $('input[name=_token]').val(),
                'name': $('input[name=name]').val(),
                'description': $('input[name=description]').val()
            },
            success: function (data) {
                if ((data.errors)) {
                    $('.error').removeClass('hidden');
                    $('.error').text(data.errors.name);
                }
                else {
                    $('.error').addClass('hidden');
                    $('#example').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td>" + data.description + "</td>" +
                        "<td>" +
                        "<div class='row'> <div class='col col-sm-2'> <a href='' data-toggle='tooltip' data-placement='top' title='Lihat' class='btn btn-xs btn-info btn-flat'><i class='glyphicon glyphicon-eye-open'></i> Lihat</a></div>" +
                        "<div class='col col-sm-2'><a href='' data-TOGGLE='tooltip' data-placement='top' title='Edit' class='btn btn-xs btn-warning btn-flat'> <i class='glyphicon glyphicon-edit'></i> Edit</a> </div>" +
                        "<div class='col col-sm-2'> <a href='' data-TOGGLE='tooltip' data-placement='top' title='Hapus' class='btn btn-xs btn-danger btn-flat'> <i class='glyphicon glyphicon-trash'></i> Hapus</a></div></div>"
                        +"</td></tr>");
                }
            },
        });
        $('#name').val('');
        $('#description').val('');
    });

    $("#edit".click(function () {
        $.ajax({
            type: 'post',
            url: '/category/update',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('input[name=id]').val(),
                'name': $('input[name=name]').val(),
                'description': $('input[name=description]').val()
            },
            success: function(data) {
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        });
    }))
</script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.edit-modal', function() {
            $('#footer_action_button').text("Update");
            $('#footer_action_button').addClass('glyphicon-check');
            $('#footer_action_button').removeClass('glyphicon-trash');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit');
            $('.modal-title').text('Edit');
            $('.deleteContent').hide();
            $('.form-horizontal').show();
            $('#fid').val($(this).data('id'));
            $('#n').val($(this).data('name'));
            $('#myModal').modal('show');
        });
        $(document).on('click', '.delete-modal', function() {
            $('#footer_action_button').text(" Delete");
            $('#footer_action_button').removeClass('glyphicon-check');
            $('#footer_action_button').addClass('glyphicon-trash');
            $('.actionBtn').removeClass('btn-success');
            $('.actionBtn').addClass('btn-danger');
            $('.actionBtn').addClass('delete');
            $('.modal-title').text('Delete');
            $('.did').text($(this).data('id'));
            $('.deleteContent').show();
            $('.form-horizontal').hide();
            $('.dname').html($(this).data('name'));
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.edit', function() {

            $.ajax({
                type: 'post',
                url: '/editItem',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#fid").val(),
                    'name': $('#n').val()
                },
                success: function(data) {
                    $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.nama + "</td>" +
                        "<td>" +
                        "<div class='row'> <div class='col col-sm-2'> <a href='' data-toggle='tooltip' data-placement='top' title='Lihat' class='btn btn-xs btn-info btn-flat'><i class='glyphicon glyphicon-eye-open'></i> Lihat</a></div>" +
                        "<div class='col col-sm-2'><a href='' data-TOGGLE='tooltip' data-placement='top' title='Edit' class='btn btn-xs btn-warning btn-flat'> <i class='glyphicon glyphicon-edit'></i> Edit</a> </div>" +
                        "<div class='col col-sm-2'> <a href='' data-TOGGLE='tooltip' data-placement='top' title='Hapus' class='btn btn-xs btn-danger btn-flat'> <i class='glyphicon glyphicon-trash'></i> Hapus</a></div></div>"
                        +"</td></tr>");
                }
            });
        });
    });
</script>
</body>
</html>