@extends('layouts.spi.master')
@section('title', 'Tambah Kegiatan')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Kegiatan PO</h1>
          <p>Tambah Kegiatan PO</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kegiatan PO</a></li>
        <li class="breadcrumb-item"><a href="#">Tambah Kegiatan PO</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <form action="{{ route('kegiatanpo.store') }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Unit Pelaksana</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_jurbagnitpus" placeholder="Kode Unit">
                                    <option class="active">Pilih Unit Pelaksana</option>
                                        @foreach ($kodeunit as $k)
                                            <option value="{{ $k->id }}"> {{ $k->kode }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">PIC</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nip_pic" placeholder="PIC" value="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Reviewer SPI</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="reviewer_spi" placeholder="Reviewer SPI" value="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Reviewer Anggaran</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="reviewer_ang" placeholder="Reviewer Anggaran" value="" >
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('kegiatanpo.index')}}" class="btn btn-sm btn-danger">Batal</a>
                        <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
                
