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
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Tahun Anggaran</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="tahun" placeholder="Tahun Anggaran" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Kode Akun</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kode_akun" placeholder="Kode Akun" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Sumber</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="kelanggaran" name="kelang" placeholder="Pilih Sumber"> 
                                    <option class="active">Pilih Sumber...</option>
                                    @foreach($kelang as $kel)
                                        <option value="{{ $kel->kelompokanggaran}}">{{ $kel->kelompokanggaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Unit Pelaksana</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_jurbagnitpus" id="unitpelaksana" placeholder="Kode Unit"> 
                                    <option class="active">Pilih Unit Pelaksana</option>
                                        @foreach ($kodeunit as $k)
                                            <option value="{{ $k->kode }}">{{ $k->jurbagnitpus }} ({{ $k->kode }})</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">521114</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_521114" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">521211</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_521211" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">521213</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_521213" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">521219</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_521219" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">521811</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_521811" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">522114</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_522114" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">522141</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_522141" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">522151</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_522151" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">524114</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_524114" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">524119</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_524119" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">532111</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_532111" placeholder="Isi Jumlah Pagu" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">536111</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mak_536111" placeholder="Isi Jumlah Pagu" value="">
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
