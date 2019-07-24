@extends('layouts.spi.master')
@section('title', 'Update Kelompok Akun')

@section('judulapp')
    <div>
          <h1><i class="fa fa-calculator"></i> Kelompok Akun</h1>
          <p>Update Kelompok Akun</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kelompok Akun</a></li>
        <li class="breadcrumb-item"><a href="#">Update Kelompok Akun</a></li>
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

                    <form action="{{ route('barang.update', $barang->id_standartbiaya) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">ID barang Akun</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id_standartbiaya" placeholder="ID barang Akun" value="{{ $barang->id_standartbiaya}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="namabarang" placeholder="Nama Barang" value="{{ $barang->namabarang}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Harga Satuan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="hargasatuan" placeholder="Harga Satuan" value="{{ $barang->hargasatuan}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Acuan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="acuan" placeholder="Acuan" value="{{ $barang->acuan}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Satuan</label>
                            <div class="col-sm-10 ">
                                <select class="form-control" data-width="auto" name="id_satuan" id="id_satuan" placeholder="Pilih Satuan">
                                    @foreach ($satuan as $sat)
                                    <option 
                                        value="{{ $sat->id_satuan}}"
                                        @if($sat->id_satuan == $barang->id_satuan)
                                            selected
                                        @endif
                                        >{{ $sat->satuan }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Akun</label>
                            <div class="col-sm-10 ">
                                <select class="form-control" data-width="auto" name="id_akun" id="id_akun" placeholder="Pilih Akun">
                                    @foreach ($akun as $akuns)
                                    <option 
                                        value="{{ $akuns->id_akun}}"
                                        @if($akuns->id_akun == $barang->id_akun)
                                            selected
                                        @endif
                                        >{{ $akuns->akun }} {{ $akuns->nama_akun}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Kelompok</label>
                            <div class="col-sm-10 ">
                                <select class="form-control" data-width="auto" name="id_kelompok" id="id_kelompok" placeholder="Pilih Kelompok">
                                    @foreach ($kelompok as $kel)
                                    <option 
                                        value="{{ $kel->id_kelompok}}"
                                        @if($kel->id_kelompok == $barang->id_kelompok)
                                            selected
                                        @endif
                                        >{{ $kel->kelompok }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('barang.index')}}" class="btn btn-sm btn-danger">Batal</a>
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
                
