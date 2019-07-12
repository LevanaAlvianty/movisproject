@extends('layouts.spi.master')
@section('title', 'Detail Satuan')

@section('judulapp')
    <div>
          <h1><i class="fa fa-calculator"></i> Satuan</h1>
          <p>Detail Data Satuan</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Satuan</a></li>
        <li class="breadcrumb-item"><a href="#">Detail Data Satuan</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <h3 class="mb-3 line-head" id="">Detail Data Satuan</h3>
                    </div>
                   
                    <div class="box-body">
                        <div class="table responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td width="150px">ID</td>
                                        <td width="20px"> : </td>
                                        <td>{{$satuan->id_satuan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Satuan</td>
                                        <td width="20px"> : </td>
                                        <td>{{$satuan->satuan}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('satuan.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection