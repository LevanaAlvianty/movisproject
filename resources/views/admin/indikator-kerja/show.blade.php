@extends('layouts.spi.master')
@section('title', 'Detail Indikator Kerja')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Indikator Kerja</h1>
          <p>Detail Data Indikator Kerja</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Indikator Kerja</a></li>
        <li class="breadcrumb-item"><a href="#">Detail Data Indikator Kerja</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <h3 class="mb-4 line-head">Detail Data Indikator Kerja</h3>
                    </div>
                    
                    <div class="box-body">
                        <div class="table responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td width="150px">ID Indikator Utama</td>
                                        <td width="20px"> : </td>
                                        <td>{{$indikator->id_dirkegiatan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Indikator Utama</td>
                                        <td width="20px"> : </td>
                                        <td>{{$indikator->dirkegiatan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Tahun Penetapan</td>
                                        <td width="20px"> : </td>
                                        <td>{{$indikator->tahun_penetapan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Status</td>
                                        <td width="20px"> : </td>
                                        <td>
                                            @if($indikator->status == 'Y')
                                                <label class="badge badge-lg badge-primary">Ya</label>
                                            @else
                                                <label class="badge badge-lg badge-danger">Tidak</label>
                                            @endif
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td width="150px">Keterangan</td>
                                        <td width="20px"> : </td>
                                        <td>{{$indikator->keterangan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Program Utama</td>
                                        <td width="20px"> : </td>
                                        <td>
                                            @foreach ($program as $p)
                                                @if($p->id_dirprogutama == $indikator->id_dirprogutama)
                                                    {{ $p->dirprogutama }}       
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('indikator.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection