@extends('layouts.spi.master')
@section('title', 'Detail Renstra')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Renstra</h1>
          <p>Detail Data Renstra</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Renstra</a></li>
        <li class="breadcrumb-item"><a href="#">Detail Data Renstra</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <h3 class="mb-4 line-head">Detail Data Renstra</h3>
                    </div>
                    
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td width="150px">ID Renstra</td>
                                        <td width="20px"> : </td>
                                        <td>{{$renstra->id_renstra}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Renstra</td>
                                        <td width="20px"> : </td>
                                        <td>{{$renstra->renstra}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Tahun Penetapan</td>
                                        <td width="20px"> : </td>
                                        <td>{{$renstra->tahun_penetapan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Status</td>
                                        <td width="20px"> : </td>
                                        <td>
                                            @if($renstra->status == 'Y')
                                                <label class="badge badge-lg badge-primary">Ya</label>
                                            @else
                                                <label class="badge badge-lg badge-danger">Tidak</label>
                                            @endif
                                        </td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('renstra.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection