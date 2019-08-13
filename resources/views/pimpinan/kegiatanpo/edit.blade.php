@extends('layouts.spi.master')
@section('title', 'Assign Reviewer')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Kegiatan PO</h1>
          <p>Assign PIC</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kegiatan PO</a></li>
        <li class="breadcrumb-item"><a href="#">Assign PIC</a></li>
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
                    <form action="{{ route('kegiatanpimpinan.update', $kegiatanpo->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">PIC</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="pic" id="pic" placeholder="Pilih PIC">
                                    @foreach ($pegawai as $p)
                                        <option 
                                            value="{{ $p->nip }}"
                                            @if($p->nip == $kegiatanpo->nip_pic)
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
                        <a href="{{ route('kegiatanpimpinan.index')}}" class="btn btn-sm btn-danger">Batal</a>
                        <button type="submit" class="btn btn-sm btn-info">Set PIC</button>
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
        $("#pic").select2({
            width: '100%',
            placeholder: 'Pilih PIC',
            allowClear: true,
            minimumInputLength: 2,
            selectOnClose: false,
            theme: "bootstrap",
        });
        
        $(window).resize(function() {
            $('#pic').css('width', "100%");
        });
    });

    $('.alert').delay(3000).slideUp(400);
</script>
@endpush()