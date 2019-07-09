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
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" value="{{ $kegiatanpo->nama_kegiatan}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Unit Pelaksana</label>
                                <div class="col-sm-10"> 
                                    <select class="form-control" name="id_jurbagnitpus" placeholder="Kode Unit" disabled>
                                        @foreach ($kodeunit as $kode)
                                        <option 
                                            value="{{ $kode->id_jurbagnitpus }}"
                                            @if($kode->id_jurbagnitpus == $kegiatanpo->id_jurbagnitpus)
                                                selected
                                            @endif
                                            >{{ $kode->jurbagnitpus }} ({{ $kode->kode }})
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">PIC</label>
                                <div class="col-sm-10">
                                    @foreach ($pegawai as $p)
                                        @if($p->nip == $kegiatanpo->pimpinan)
                                            <input type="text" class="form-control" name="pimpinan" placeholder="Penanggungjawab" value="{{ $p->nama}}" disabled>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">PIC</label>
                                <div class="col-sm-10">
                                    @foreach ($pegawai as $p)
                                        @if($p->nip == $kegiatanpo->nip_pic)
                                            <input type="text" class="form-control" name="nip_pic" placeholder="PIC" value="{{ $p->nama}}" disabled>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Reviewer SPI</label>
                                <div class="col-sm-10">
                                    @foreach ($pegawai as $p)
                                        @if($p->nip == $kegiatanpo->reviewer_spi)
                                            <input type="text" class="form-control" name="reviewer_spi" placeholder="Reviewer SPI" value="{{ $kegiatanpo->reviewer_spi}}" disabled>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Reviewer Anggaran</label>
                                <div class="col-sm-10">
                                    @foreach ($pegawai as $p)
                                        @if($p->nip == $kegiatanpo->reviewer_spi)
                                            <input type="text" class="form-control" name="reviewer_ang" placeholder="Reviewer Anggaran" value="{{ $kegiatanpo->reviewer_ang}}" disabled>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{ route('kegiatanpo.index')}}" class="btn btn-sm btn-info">Kembali</a>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection