@extends('layouts.spi.master')
@section('title', 'Detail Kelompok Akun')

@section('judulapp')
    <div>
          <h1><i class="fa fa-calculator"></i> Kelompok Akun</h1>
          <p>Detail Data Kelompok Akun</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kelompok Akun</a></li>
        <li class="breadcrumb-item"><a href="#">Detail Data Kelompok Akun</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <h3 class="mb-4 line-head">Detail Data Kelompok Akun</h3>
                    </div>
                    
                    <div class="box-body">
                        <div class="table responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td width="150px">ID Kelompok Akun</td>
                                        <td width="20px"> : </td>
                                        <td>{{$kelompok->id_kelompok}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Kelompok Akun</td>
                                        <td width="20px"> : </td>
                                        <td>{{$kelompok->kelompok}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Akun</td>
                                        <td width="20px"> : </td>
                                        <td>
                                            @foreach ($akun as $akuns)
                                                @if($akuns->id_akun == $kelompok->id_akun)
                                                {{ $akuns->akun }} {{ $akuns->nama_akun }}       
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
                        <a href="{{ route('kelompok-akun.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection