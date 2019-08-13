@extends('layouts.spi.master')
@section('title', 'Detail Pejabat')

@section('judulapp')
    <div>
          <h1><i class="fa fa-group"></i> Pejabat</h1>
          <p>Detail Data Pejabat</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Pejabat</a></li>
        <li class="breadcrumb-item"><a href="#">Detail Data Pejabat</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <h3 class="mb-3 line-head">Detail Data "{{$pejabat->name}}"</h3>
                    </div>
                    
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td width="150px">ID</td>
                                        <td width="20px"> : </td>
                                        <td>{{$pejabat->id}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">NIP</td>
                                        <td width="20px"> : </td>
                                        <td>{{$pejabat->nip}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Nama</td>
                                        <td width="20px"> : </td>
                                        <td>{{$pejabat->name}}</td>
                                    </tr> 
                                    <tr>
                                        <td width="150px">Jabatan</td>
                                        <td width="20px"> : </td>
                                        <td>{{$pejabat->jabatan}}</td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('role.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection