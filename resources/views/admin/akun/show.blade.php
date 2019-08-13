@extends('layouts.spi.master')
@section('title', 'Detail Akun')

@section('judulapp')
    <div>
          <h1><i class="fa fa-group"></i> Akun</h1>
          <p>Detail Data Akun</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Akun</a></li>
        <li class="breadcrumb-item"><a href="#">Detail Data Akun</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <h3 class="mb-3 line-head" id="">Detail Data Akun {{$akun->akun}}</h3>
                    </div>
                   
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td width="150px">ID</td>
                                        <td width="20px"> : </td>
                                        <td>{{$akun->id_akun}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Akun</td>
                                        <td width="20px"> : </td>
                                        <td>{{$akun->akun}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Nama Akun</td>
                                        <td width="20px"> : </td>
                                        <td>{{$akun->nama_akun}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Keterangan</td>
                                        <td width="20px"> : </td>
                                        <td>{{$akun->ket_akun}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('akun.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection