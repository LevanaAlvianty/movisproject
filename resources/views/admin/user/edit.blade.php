@extends('layouts.spi.master')
@section('title', 'Update Pegawai')

@section('judulapp')
    <div>
          <h1><i class="fa fa-group"></i> Pegawai</h1>
          <p>Update Pegawai</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
        <li class="breadcrumb-item"><a href="#">Update Pegawai</a></li>
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

                    <form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">NIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nip" placeholder="NIP" value="{{ $pegawai->nip}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Pegawai" value="{{ $pegawai->nama}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $pegawai->username}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Golongan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="golongan" placeholder="Golongan" value="{{ $pegawai->golongan}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="{{ $pegawai->jabatan}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Jurusan / Bagian / Unit Pusat</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="jurusan" name="jurusan" placeholder="Jurusan/Bagian/Unit Pusat"> 
                                    @foreach ($kodeunit as $jurusan)
                                        <option 
                                            value="{{ $jurusan->kode }}" 
                                            {{ ($jurusan->kode == $pegawai->jurusan) ? 'selected' : ''}}>{{ $jurusan->jurbagnitpus }} ({{ $jurusan->kode }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Role</label>
                            <div class="col-sm-10">
                                <select multiple="multiple" name="role[]" id="" class="form-control">
                                @foreach($peran as $r)
                                    <option value="{{ $r->id }}" 
                                        @foreach($pegawai->roles as $act)
                                            @if($r->id == $act->id)
                                                selected
                                            @endif
                                        @endforeach
                                        >{{ $r->name}}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('pegawai.index')}}" class="btn btn-sm btn-danger">Batal</a>
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

$(document).ready(function() {
    $("#jurusan").select2({
        width: '100%',
        placeholder: 'Pilih PIC',
        allowClear: true,
        minimumInputLength: 1,
        selectOnClose: false,
        theme: "bootstrap",
    });
    
    $(window).resize(function() {
        $('#jurusan').css('width', "100%");
    });
});
</script>
@endpush()
                
