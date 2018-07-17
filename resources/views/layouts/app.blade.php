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
        <strong>Copyright &copy; 2017-2018 <a href="#">CSG Network</a>.</strong> All rights CSG Network.
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.3/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
<script>
    $(document).ready(function () {
        $("#myModal").on("show.bs.modal", function (e) {
            var kodeSewa = $(e.relatedTarget).data('target-id');

            $.get('/rekap/details/' + kodeSewa, function (data) {
                $(".fect-modal-body").html(data);
            });
        });

        $("#myModaldas").on("show.bs.modal", function (e) {
            var bulan_id = $(e.relatedTarget).data('target-id');

            $.get('/rekap/detailsDas/' + bulan_id, function (data) {
                $(".details-modal-body").html(data);
            });
        });
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
        $('#basic2').selectpicker({
            liveSearch: true,
            maxOptions: 1
        });

        $('#basic3').selectpicker({
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

</body>
</html>