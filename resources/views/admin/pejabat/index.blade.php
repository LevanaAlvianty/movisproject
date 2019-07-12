@extends('layouts.spi.master')
@section('title', 'Data Pejabat')

@section('judulapp')
    <div>
          <h1><i class="fa fa-group"></i> Pejabat</h1>
          <p>Data Pejabat</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Pejabat</a></li>
        <li class="breadcrumb-item"><a href="#">Data Pejabat</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                               
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif
                    <!-- Box -->
                    <div class="box">
                        <div class="bs-component">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_1">Kelola Pejabat</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_2">Tambah Pejabat</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1"><br>
                                    <div class="table responsive">
                                    <table class="table table-bordered table-striped dt-responsive " id="tabelpejabat">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">NIP</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Jabatan</th>
                                                <th class="text-center">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pejabat as $p )
                                            <tr>
                                                <td>{{$p->nip}}</td>
                                                <td>{{$p->name}}</td> 
                                                <td>{{$p->jabatan}}</td>
                                                <td>
                                                    <a href="{{ route('pejabat.edit', $p->id) }}" class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i> Edit</a>
                                                    <button class="btn btn-sm btn-danger" data-pejabatid="{{$p->id}}" data-toggle="modal" data-target="#deleteData"><i class="icon fa fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                   
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2"><br>
                                    <form class="form-horizontal" action="{{ route('pejabat.store') }}" method="POST">
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2">NIP</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="nip" placeholder="NIP">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Nama</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="name" placeholder="Nama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Jabatan</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-sm btn-success"><i class="icon fa fa-plus"></i> Tambah Data</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.tile -->
        </div>
    </div>
    <!-- /.row -->
</div> 
<!-- /.container -->

<!-- Modal Delete -->
<div class="modal fade" id="deleteData" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h5 class="modal-title text-center">Hapus Data Pejabat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div> 
        <form method="POST" action="{{route('pejabat.destroy','test')}}">
            {{ method_field('DELETE') }} 
            {{ csrf_field() }}
            <div class="modal-body">
                <p>Apakah Anda yakin untuk menghapus data ini?</p>
                <input type="hidden" name="pejabat_id" id="pejabat_id" />
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
            </div> 
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabelpejabat').DataTable({
            "paging"    : true,
            "ordering"  : true,
            "info"      : true,
            "searching" : true,
            "autoWidth" : false,
            "LengthChange" : false,
            "responsive":true
        });
    });

    $('#deleteData').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget) // Button yg memicu modal
        var pejabat_id = button.data('pejabatid'); //mengambil info dari atribut data-*
        var modal = $(this)

        modal.find('.modal-body #pejabat_id').val(pejabat_id);
    });
</script>
<script>
$('.alert').delay(3000).slideUp(300);
</script>

@endpush()