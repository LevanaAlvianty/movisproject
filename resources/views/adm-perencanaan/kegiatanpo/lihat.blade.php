@extends('layouts.spi.master')
@section('title', 'Detail Kegiatan')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Kegiatan PO</h1>
          <p>Detail Kegiatan PO</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kegiatan PO</a></li>
        <li class="breadcrumb-item"><a href="#">Detail Kegiatan PO</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <h3>Detail Data Kegiatan PO "{{$kegiatanpo->nama_kegiatan}}"</h3><br>
                    </div>
                    
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th >ID Kegiatan</th>
                                <td class="ikpo">{{$kegiatanpo->id}}</td>
                            </tr>
                            <tr>
                                <th>Kode Akun</th>
                                <td>{{$kegiatanpo->kode_akun}}</td>
                            </tr>
                            <tr>
                                <th>Sumber</th>
                                <td>{{ $kegiatanpo->kelompokanggaran }}</td>
                            </tr>
                            <tr>
                                <th>Unit Pelaksana</th>
                                <td class="unpel">
                                    {{ $kegiatanpo->jurbagnitpus }} ({{ $kegiatanpo->kode }})
                                </td>
                            </tr>
                            <tr>
                                <th>Nama Kegiatan</th>
                                <td class="namakeg">{{$kegiatanpo->nama_kegiatan}}</td>
                            </tr>
                            <tr>
                                <th>Tahun Anggaran</th>
                                <td>{{$kegiatanpo->tahun}}</td>
                            </tr>
                            <tr>
                                <th>521114</th>
                                <td >{{ $kegiatanpo->mak_521114 }}</td>
                            </tr>
                            <tr>
                                <th>521211</th>
                                <td>{{ $kegiatanpo->mak_521211 }}</td>
                            </tr> 
                            <tr>
                                <th>521213</th>
                                <td>{{ $kegiatanpo->mak_521213 }}</td>
                            </tr>
                            <tr>
                                <th>521219</th>
                                <td>{{ $kegiatanpo->mak_521219 }}</td>
                            </tr> 
                            <tr>
                                <th>521811</th>
                                <td>{{ $kegiatanpo->mak_521811 }}</td>
                            </tr>
                            <tr>
                                <th>522114</th>
                                <td>{{ $kegiatanpo->mak_522114 }}</td>
                            </tr> 
                            <tr>
                                <th>522141</th>
                                <td>{{ $kegiatanpo->mak_522141 }}</td>
                            </tr>
                            <tr>
                                <th>522151</th>
                                <td>{{ $kegiatanpo->mak_522151 }}</td>
                            </tr> 
                            <tr>
                                <th>524114</th>
                                <td>{{ $kegiatanpo->mak_524114 }}</td>
                            </tr>
                            <tr>
                                <th>524119</th>
                                <td>{{ $kegiatanpo->mak_524119 }}</td>
                            </tr> 
                            <tr>
                                <th>532111</th>
                                <td>{{ $kegiatanpo->mak_532111 }}</td>
                            </tr>
                            <tr>
                                <th>536111</th>
                                <td>{{ $kegiatanpo->mak_536111 }}</td>
                            </tr> 
                            <!-- <tr>
                                <th>Total</th>
                                <td></td>
                            </tr>  -->
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('kegiatanpo.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection
