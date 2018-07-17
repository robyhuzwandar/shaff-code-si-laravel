@if(session('success'))
    <div class="alert callout callout-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
        {{ session('success') }}
    </div>
@endif

@if(session('danger'))
    <div class="alert callout callout-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Danger!</h4>
        {{ session('danger') }}
    </div>
@endif

@if(session('warning'))
    <div class="alert callout callout-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>
        {{ session('warning') }}
    </div>
@endif


