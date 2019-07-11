@extends('layouts.spi.master')
@section('title', 'Detail Pegawai')

@section('judulapp')
    <div>
          <h1><i class="fa fa-group"></i> Pegawai</h1>
          <p>Detail Data Pegawai</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
        <li class="breadcrumb-item"><a href="#">Detail Data Pegawai</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header text-center">
                        <h3 style="font-family:Lato">DETAIL DATA "{{$pegawai->nama}}"</h3>
                    </div>
                    
                    <img class="img-fluid rounded-circle" width="150px" height="150px" src="{{asset('gambar/profil/'. $pegawai->photo)}}" alt="User Image" /><hr>
                    <div class="box-body">
                    
                        <div class="table responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td width="150px">NIP</td>
                                        <td width="20px"> : </td>
                                        <td>{{$pegawai->nip}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Nama</td>
                                        <td width="20px"> : </td>
                                        <td>{{$pegawai->nama}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Username</td>
                                        <td width="20px"> : </td>
                                        <td>{{$pegawai->username}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Golongan</td>
                                        <td width="20px"> : </td>
                                        <td>{{$pegawai->golongan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Jabatan</td>
                                        <td width="20px"> : </td>
                                        <td>{{$pegawai->jabatan}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Email</td>
                                        <td width="20px"> : </td>
                                        <td>{{$pegawai->email}}</td>
                                    </tr>
                                    <tr>
                                        <td width="150px">Roles</td>
                                        <td width="20px"> : </td>
                                        <td>
                                            @if(!empty($pegawai->roles))
                                                @foreach($pegawai->roles as $r)
                                                    <label class="badge badge-success">{{ $r->name }}</label>
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('pegawai.index')}}" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div> 
        </div>    
    </div>
</div>
@endsection