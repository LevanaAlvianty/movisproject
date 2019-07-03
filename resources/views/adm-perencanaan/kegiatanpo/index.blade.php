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
                
                    <table class="table-responsive table table-hover table-bordered" id="tabelkegiatan">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Nama Kegiatan</th> 
                                <th class="text-center align-middle">Unit Pelaksana</th>
                                <th class="text-center align-middle">PIC</th>
                                <th class="text-center align-middle">Reviewer SPI</th>
                                <th class="text-center align-middle">Reviewer Anggaran</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($kegiatanpo as $kpo )
                            <tr>
                                <td>{{$kpo->id}}</td>
                                <td>{{$kpo->nama_kegiatan}}</td> 
                                <td>{{$kpo->kode}}</td>
                                <td>{{$kpo->nip_pic}}</td>
                                <td>{{$kpo->reviewer_spi}}</td>
                                <td>{{$kpo->reviewer_ang}}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i></button>
                                    <a href="#" value="{{ action('AdminPerencanaan\KegiatanPOController@show',['id'=> $kpo->id]) }}" class="btn btn-sm btn-warning waves-effect modalMd" data-toggle="modal" title="Detail Kegiatan PO" data-target="#modalMd">
                                    <i class="icon fa fa-eye"></i></a>
                                    
                                    <button class="btn btn-sm btn-danger"><i class="icon fa fa-trash"></i></button>
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
@endsection

@push('js')

<script type="text/javascript">
    $(document).ready(function () {
        $('#tabelkegiatan').DataTable({
            "paging"    : true,
            "ordering"  : true,
            "info"      : false,
            "searching" : false,
            "autoWidth" : true,
            'LengthChange' : true
        });
    });
</script>

@endpush()