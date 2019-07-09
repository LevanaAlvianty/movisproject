@extends('layouts.spi.master')
@section('title', 'Daftar Kegiatan')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Kegiatan PO</h1>
          <p>Daftar Kegiatan PO</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kegiatan PO</a></li>
        <li class="breadcrumb-item"><a href="#">Daftar Kegiatan PO</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                               
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <a href="{{ route('kegiatanpo.create') }}" class="btn btn-sm btn-success pull-right ml-2"><i class="icon fa fa-plus"></i></a>
                    <button type="button" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#importExcel">
                        <i class="icon fa fa-upload"></i>
                    </button>
    
                    <!-- Modal Import Excel -->
                    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form method="post" action="{{ url('/kegiatan/import_excel') }}" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                    </div>
                                    <div class="modal-body">
                                        {{ csrf_field() }}
                                        <label>Pilih file excel</label>
                                        <div class="form-group">
                                            <input type="file" name="file" required="required">
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Import</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <a href="/kegiatan/export_excel" class="btn btn-sm btn-info pull-right mr-2" target="_blank"><i class="icon fa fa-download"></i></a>
                    <table class="table table-hover table-bordered dt-responsive" id="tabelkegiatan">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Nama Kegiatan</th> 
                                <th class="text-center align-middle">Unit Pelaksana</th>
                                <th class="text-center align-middle">Penanggungjawab</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($kegiatanpo as $kpo )
                            <tr>
                                <td>{{$kpo->id}}</td>
                                <td>{{$kpo->nama_kegiatan}}</td> 
                                <td>{{$kpo->kode}}</td>
                                <td>{{$kpo->nama}}</td>
                                <td>
                                    <a href="{{ route('kegiatanpo.edit', $kpo->id) }}" class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i></a>
                                    <a href="{{ route('kegiatanpo.show', $kpo->id) }}" class="btn btn-sm btn-warning"><i class="icon fa fa-eye"></i></a>
                                    <button class="btn btn-sm btn-danger" data-kegid="{{$kpo->id}}" data-toggle="modal" data-target="#deleteData"><i class="icon fa fa-trash"></i></button>
                                    </td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 

<!-- Modal Delete -->
<div class="modal fade" id="deleteData" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h5 class="modal-title text-center">Hapus Data Kegiatan PO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div> 
        <form method="POST" action="{{route('kegiatanpo.destroy','test')}}">
            {{ method_field('DELETE') }} 
            {{ csrf_field() }}
            <div class="modal-body">
                <p>Apakah Anda yakin untuk menghapus data ini?</p>
                <input type="hidden" name="kegiatan_id" id="keg_id" />
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
        $('#tabelkegiatan').DataTable({
            "paging"    : true,
            "ordering"  : true,
            "info"      : false,
            "searching" : false,
            "autoWidth" : false,
            "LengthChange" : false,
            "responsive":true
        });
    });

    $('#deleteData').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget) // Button yg memicu modal
        var keg_id = button.data('kegid'); //mengambil info dari atribut data-*
        var modal = $(this)

        modal.find('.modal-body #keg_id').val(keg_id);
    });

    $('.alert').delay(3000).slideUp(400);
</script>

@endpush()