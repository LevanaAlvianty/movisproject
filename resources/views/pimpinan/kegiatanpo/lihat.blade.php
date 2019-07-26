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
                                <th>Penanggungjawab</th>
                                <td class="pimpinan">
                                    {{Auth::guard('pegawai')->user()->nama}}
                                </td>
                            </tr>
                            <tr>
                                <th>PIC</th>
                                <td class="pic">
                                    @foreach ($pegawai as $p)
                                        @if($p->nip == $kegiatanpo->nip_pic)
                                            {{ $p->nama }}       
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Reviewer SPI</th>
                                <td class="spi">
                                    @foreach ($pegawai as $p)
                                        @if($p->nip == $kegiatanpo->reviewer_spi)
                                            {{ $p->nama }}       
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Reviewer Anggaran</th>
                                <td class="anggaran">
                                    @foreach ($pegawai as $p)
                                        @if($p->nip == $kegiatanpo->reviewer_ang)
                                            {{ $p->nama }}       
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('kegiatanpimpinan.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection
