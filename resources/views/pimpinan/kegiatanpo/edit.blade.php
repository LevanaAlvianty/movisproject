@extends('layouts.spi.master')
@section('title', 'Update Kegiatan')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Kegiatan PO</h1>
          <p>Update Kegiatan PO</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kegiatan PO</a></li>
        <li class="breadcrumb-item"><a href="#">Update Kegiatan PO</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <form action="{{ route('kegiatanpo.update', $kegiatanpo->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" value="{{ $kegiatanpo->nama_kegiatan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Unit Pelaksana</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_jurbagnitpus" id="jurbagnitpus" placeholder="Pilih Unit Pelaksana">
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
                                <select class="form-control" name="nip_pic" id="pic" placeholder="Pilih PIC">
                                    @foreach ($pegawai as $p)
                                    <option 
                                        value="{{ $p->nip }}"
                                        @if($p->nip == $kegiatanpo->nip_pic)
                                            selected
                                        @else
                                            {{$kegiatanpo->nip_pic == ''}}
                                        @endif
                                        >{{ $p->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Reviewer SPI</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="reviewer_spi" id="reviewer_spi" placeholder="Pilih Reviewer SPI">
                                    @foreach ($pegawai as $peg)
                                    <option 
                                        value="{{ $peg->nip }}"
                                        @if($peg->nip == $kegiatanpo->reviewer_spi)
                                            selected
                                        @endif
                                        >{{ $peg->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Reviewer Anggaran</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="reviewer_anggaran" id="reviewer_anggaran" placeholder="Pilih Reviewer Anggaran">
                                        @foreach ($pegawai as $p)
                                        <option 
                                            value="{{ $p->nip }} {{ ( $p->nip == $kegiatanpo->reviewer_ang ) ? 'selected' : '' }}" >
                                            {{ $p->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('kegiatanpo.index')}}" class="btn btn-sm btn-danger">Batal</a>
                        <button type="submit" class="btn btn-sm btn-info">Update</button>
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
        $("#jurbagnitpus").select2({
            width: '100%',
            placeholder: 'Pilih Unit Pelaksana',
            allowClear: true,
            selectOnClose: false,
        });
        $(window).resize(function() {
            $('#jurbagnitpus').css('width', "100%");
        });
    });

    //search nip
    $(document).ready(function() {
        $("#pic").select2({
            width: '100%',
            placeholder: 'Pilih PIC',
            allowClear: true,
            minimumInputLength: 2,
            selectOnClose: false,
        });
        
        $(window).resize(function() {
            $('#pic').css('width', "100%");
        });
    });
    
    //search reviewer spi
    $(document).ready(function() {
        $("#reviewer_spi").select2({
            width: '100%',
            placeholder: 'Pilih Reviewer SPI',
            allowClear: true,
            minimumInputLength: 2,
            selectOnClose: false,
        });
        
        $(window).resize(function() {
            $('#reviewer_spi').css('width', "100%");
        });
    });

    //search reviewer anggaran
    $(document).ready(function() {
        $("#reviewer_anggaran").select2({
            width: '100%',
            placeholder: 'Pilih Reviewer Anggaran',
            allowClear: true,
            minimumInputLength: 2,
            selectOnClose: false,
        });
        
        $(window).resize(function() {
            $('#reviewer_anggaran').css('width', "100%");
        });
    });
    
});
</script>
@endpush()