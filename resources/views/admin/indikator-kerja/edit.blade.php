@extends('layouts.spi.master')
@section('title', 'Update Indikator Kerja')

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Indikator Kerja</h1>
          <p>Update Indikator Kerja</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Indikator Kerja</a></li>
        <li class="breadcrumb-item"><a href="#">Update Indikator Kerja</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
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

                    <form action="{{ route('indikator.update', $indikator->id_dirkegiatan) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">ID Indikator Kerja</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id_dirprogutama" placeholder="ID Indikator Kerja" value="{{ $indikator->id_dirkegiatan}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Indikator Kerja</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="dirkegiatan" placeholder="Indikator Kerja" value="{{ $indikator->dirkegiatan}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Tahun Penetapan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tahun_penetapan" placeholder="Tahun Penetapan" value="{{ $indikator->tahun_penetapan}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Status</label>
                            <div class="col-sm-10">
                                @if($indikator->status == 'N')
                                    <label class="form-check custom-radio">
                                        <input type="radio" name="status" class="form-check-input" value="N" checked>
                                        <span class="form-check-indicator"></span>
                                        <span class="form-check-description">Tidak</span>
                                    </label>
                                    <label class="form-check custom-radio">
                                        <input type="radio" name="status" class="form-check-input" value="Y">
                                        <span class="form-check-indicator"></span>
                                        <span class="form-check-description">Ya</span>
                                    </label>
                                @elseif($indikator->status == 'Y')
                                    <label class="form-check custom-radio">
                                        <input type="radio" name="status" class="form-check-input" value="N">
                                        <span class="form-check-indicator"></span>
                                        <span class="form-check-description">Tidak</span>
                                    </label>
                                    <label class="form-check custom-radio">
                                        <input type="radio" name="status" class="form-check-input" value="Y" checked>
                                        <span class="form-check-indicator"></span>
                                        <span class="form-check-description">Ya</span>
                                    </label>
                                @else
                                    <label class="form-check custom-radio">
                                        <input type="radio" name="status" class="form-check-input" value="N">
                                        <span class="form-check-indicator"></span>
                                        <span class="form-check-description">Tidak</span>
                                    </label>
                                    <label class="form-check custom-radio">
                                        <input type="radio" name="status" class="form-check-input" value="Y">
                                        <span class="form-check-indicator"></span>
                                        <span class="form-check-description">Ya</span>
                                    </label>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="{{ $indikator->keterangan}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Program Utama</label>
                            <div class="col-sm-10 ">
                                <select class="form-control" data-width="auto" name="id_dirprogutama" id="id_dirprogutama" placeholder="Pilih Program Utama">
                                    @foreach ($program as $p)
                                    <option 
                                        value="{{ $p->id_dirprogutama }}"
                                        @if($p->id_dirprogutama == $indikator->id_dirprogutama)
                                            selected
                                        @endif
                                        >{{ $p->dirprogutama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('indikator.index')}}" class="btn btn-sm btn-danger">Batal</a>
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
$('.alert').delay(3000).slideUp(300);
</script>
@endpush()
                
