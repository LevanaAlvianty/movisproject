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

                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                               
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Unit Pelaksana</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_jurbagnitpus" id="unitpelaksana" placeholder="Kode Unit" required> 
                                    <option class="active">Pilih Unit Pelaksana</option>
                                        @foreach ($kodeunit as $k)
                                            <option value="{{ $k->id_jurbagnitpus }}">{{ $k->jurbagnitpus }} ({{ $k->kode }})</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Penanggungjawab</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="pimpinan" id="pimpinan"placeholder="Penanggungjawab">
                                    <option class="active">Pilih Penanggungjawab</option>
                                        @foreach ($pegawai as $p)
                                            <option value="{{ $p->nip }}"> {{ $p->nama }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">PIC</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="nip_pic" id="nip_pic"placeholder="PIC">
                                    <option class="active">Pilih PIC</option>
                                        @foreach ($pegawai as $p)
                                            <option value="{{ $p->nip }}"> {{ $p->nama }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Reviewer SPI</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="reviewer_spi" id="rev_spi" placeholder="Reviewer SPI">
                                    <option class="active">Pilih Reviewer SPI</option>
                                        @foreach ($pegawai as $p)
                                            <option value="{{ $p->nip }}"> {{ $p->nama }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Reviewer Anggaran</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="reviewer_ang" id="rev_anggaran" placeholder="Reviewer Anggaran">
                                    <option class="active">Pilih Reviewer Anggaran</option>
                                        @foreach ($pegawai as $p)
                                            <option value="{{ $p->nip }}"> {{ $p->nama }}</option>
                                        @endforeach
                                </select>
                                <!-- <input type="text" class="form-control" name="reviewer_ang" placeholder="Reviewer Anggaran" value="" > -->
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
  
@push('js')
<script>
$(document).ready(function() {
    //search unit pelaksana
    $(document).ready(function() {
        $("#unitpelaksana").select2({
            width: '100%',
            placeholder: 'Pilih Unit Pelaksana',
            allowClear: true,
            theme: "bootstrap",
        });
        $(window).resize(function() {
            $('#unitpelaksana').css('width', "100%");
        });
    });

    //search nip
    $(document).ready(function() {
        $("#nip_pic").select2({
            width: '100%',
            placeholder: 'Pilih PIC',
            allowClear: true,
            minimumInputLength: 2,
            theme: "bootstrap",
        });
        
        $(window).resize(function() {
            $('#nip_pic').css('width', "100%");
        });
    });

    //search unit pelaksana
    $(document).ready(function() {
        $("#pimpinan").select2({
            width: '100%',
            placeholder: 'Pilih Penanggungjawan',
            allowClear: true,
            selectOnClose: false,
            theme: "bootstrap",
        });
        $(window).resize(function() {
            $('#pimpinan').css('width', "100%");
        });
    });
    
    //search reviewer spi
    $(document).ready(function() {
        $("#rev_spi").select2({
            width: '100%',
            placeholder: 'Pilih Reviewer SPI',
            allowClear: true,
            minimumInputLength: 2,
            theme: "bootstrap",
        });
        
        $(window).resize(function() {
            $('#rev_spi').css('width', "100%");
        });
    });

    //search reviewer anggaran
    $(document).ready(function() {
        $("#rev_anggaran").select2({
            width: '100%',
            placeholder: 'Pilih Reviewer Anggaran',
            allowClear: true,
            minimumInputLength: 2,
            theme: "bootstrap"
        });
        
        $(window).resize(function() {
            $('#rev_anggaran').css('width', "100%");
        });
    });
});

$('.alert').delay(3000).slideUp(400);
</script>


@endpush()
