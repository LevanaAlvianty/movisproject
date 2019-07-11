@extends('layouts.spi.master')
@section('title', 'Assign Role User')

@section('judulapp')
    <div>
          <h1><i class="fa fa-group"></i> User</h1>
          <p>Assign Role User</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">User</a></li>
        <li class="breadcrumb-item"><a href="#">Assign Role User</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header text-center">
                        <h3 style="font-family:Lato">ASSIGN ROLE</h3><br>
                    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <div class="box-body">
                        <table class="table table-dark table-bordered table-hover">
                            <tbody> 
                                <form method="POST" action="{{route('pegawai.assign.post',$pegawai->id_pegawai)}}"> 
                                {{csrf_field()}}
                                {{ method_field('PUT') }}
                                    <tr>
                                        <th width="100">NIP</th>
                                        <td>{{ $pegawai->nip }}</td><input type="hidden" name="nip" value="{{ $pegawai->nip }}">
                                    </tr>
                                    <tr>
                                        <th width="100">Nama</th>
                                        <td>{{ $pegawai->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th width="100" rowspan="8">Role</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="role_admin" {{ $pegawai->role == 'admin' ? 'checked' : '' }}> 
                                            Admin
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="role_adminperencanaan" {{ $pegawai->role == 'admin_perencanaan' ? 'checked' : '' }}> 
                                            Admin Perencanaan
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="role_adminspi" {{ $pegawai->role == 'admin_spi' ? 'checked' : '' }}> 
                                            Admin SPI
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="role_pic" {{ $pegawai->role == 'pic' ? 'checked' : '' }}> 
                                            PIC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="role_pimpinan" {{ $pegawai->role == 'pimpinan' ? 'checked' : '' }}> 
                                            Pimpinan
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="role_reviewerspi" {{ $pegawai->role == 'reviewer_spi' ? 'checked' : '' }}> 
                                            Reviewer SPI
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="role_revieweranggaran" {{ $pegawai->role == 'reviewer_ang' ? 'checked' : '' }}> 
                                            Reviewer Anggaran
                                        </td>
                                    </tr>   
                                 </form>   
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('pegawai.index')}}" class="btn btn-sm btn-danger">Batal</a>
                        <button type="submit" class="btn btn-sm btn-primary">Assign Role</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
                
