@extends('layouts.spi.master')
@section('title', 'Detail Barang')

@section('judulapp')
    <div>
          <h1><i class="fa fa-calculator"></i> Barang</h1>
          <p>Detail Data Barang</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Barang</a></li>
        <li class="breadcrumb-item"><a href="#">Detail Data Barang</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <h3 class="mb-4 line-head">Detail Data Barang</h3>
                    </div>
                    
                    <div class="box-body">
                        <div class="table responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td width="150px">ID Barang</td>
                                        <td width="20px"> : </td>
                                        <td>{{$barang->id_standartbiaya}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Nama Barang</td>
                                        <td width="20px"> : </td>
                                        <td>{{$barang->namabarang}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Harga Satuan</td>
                                        <td width="20px"> : </td>
                                        <td>Rp {{$barang->hargasatuan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Acuan</td>
                                        <td width="20px"> : </td>
                                        <td>{{$barang->acuan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Satuan</td>
                                        <td width="20px"> : </td>
                                        <td>
                                            @foreach ($satuan as $satuans)
                                                @if($satuans->id_satuan == $barang->id_satuan)
                                                    {{ $satuans->satuan}}      
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Akun</td>
                                        <td width="20px"> : </td>
                                        <td>
                                            @foreach ($akun as $akuns)
                                                @if($akuns->id_akun == $barang->id_akun)
                                                {{ $akuns->akun }} {{ $akuns->nama_akun }}       
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Kelompok Akun</td>
                                        <td width="20px"> : </td>
                                        <td>
                                            @foreach ($kelompok as $kel)
                                                @if($kel->id_kelompok == $barang->id_kelompok)
                                                    {{ $kel->kelompok }}     
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
                        <a href="{{ route('barang.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection