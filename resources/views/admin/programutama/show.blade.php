@extends('layouts.spi.master')
@section('title', 'Detail Program Utama')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Program Utama</h1>
          <p>Detail Data Program Utama</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Program Utama</a></li>
        <li class="breadcrumb-item"><a href="#">Detail Data Program Utama</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <h3 class="mb-4 line-head">Detail Data Program Utama</h3>
                    </div>
                    
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td width="150px">ID Program Utama</td>
                                        <td width="20px"> : </td>
                                        <td>{{$program->id_dirprogutama}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Program Utama</td>
                                        <td width="20px"> : </td>
                                        <td>{{$program->dirprogutama}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Tahun Penetapan</td>
                                        <td width="20px"> : </td>
                                        <td>{{$program->tahun_penetapan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Status</td>
                                        <td width="20px"> : </td>
                                        <td>
                                            @if($program->status == 'Y')
                                                <label class="badge badge-lg badge-primary">Ya</label>
                                            @else
                                                <label class="badge badge-lg badge-danger">Tidak</label>
                                            @endif
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td width="150px">Renstra</td>
                                        <td width="20px"> : </td>
                                        <td>
                                            @foreach ($renstra as $r)
                                                @if($r->id_renstra == $program->id_renstra)
                                                    {{ $r->renstra }}       
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
                        <a href="{{ route('programutama.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection