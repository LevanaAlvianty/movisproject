@extends('layouts.spi.master')
@section('title', 'Assign Reviewer')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Kegiatan PO</h1>
          <p>Assign Reviewer</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kegiatan PO</a></li>
        <li class="breadcrumb-item"><a href="#">Assign Reviewer</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <form action="{{ route('kegiatanadminspi.update', $kegiatanpo->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Reviewer SPI</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="reviewer_spi" id="reviewer_spi" placeholder="Pilih Reviewer SPI">
                                    @foreach ($pegawai as $p)
                                        <option 
                                            value="{{ $p->nip }}"
                                            @if($p->nip == $kegiatanpo->reviewer_spi)
                                                selected
                                            @endif
                                            >{{ $p->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Reviewer Anggaran</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="reviewer_ang" id="reviewer_ang" placeholder="Pilih Reviewer Anggaran">
                                    @foreach ($pegawai as $p)
                                        <option 
                                            value="{{ $p->nip }}"
                                            @if($p->nip == $kegiatanpo->reviewer_ang)
                                                selected
                                            @endif
                                            >{{ $p->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('kegiatanadminspi.index')}}" class="btn btn-sm btn-danger">Batal</a>
                        <button type="submit" class="btn btn-sm btn-info">Assign Reviewer</button>
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
    //search nip
    $(document).ready(function() {
        $("#reviewer_spi").select2({
            width: '100%',
            placeholder: 'Pilih PIC',
            allowClear: true,
            minimumInputLength: 2,
            selectOnClose: false,
            theme: "bootstrap",
        });
        
        $(window).resize(function() {
            $('#reviewer_spi').css('width', "100%");
        });
    });

    $(document).ready(function() {
        $("#reviewer_ang").select2({
            width: '100%',
            placeholder: 'Pilih PIC',
            allowClear: true,
            minimumInputLength: 2,
            selectOnClose: false,
            theme: "bootstrap",
        });
        
        $(window).resize(function() {
            $('#reviewer_ang').css('width', "100%");
        });
    });

    $('.alert').delay(3000).slideUp(400);
</script>
@endpush()