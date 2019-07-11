@extends('layouts.spi.master')
@section('title', 'Setting')

@section('judulapp')
    <div>
          <h1><i class="fa fa-user"></i> Profile</h1>
          <p>Setting Profile</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Profile</a></li>
        <li class="breadcrumb-item"><a href="#">Setting Profile</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <!-- Box -->
                    <div class="box">
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
                        <div class="bs-component">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_1">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_2">Update Profil</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_3">Change Password</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1"><br>
                                @if(Auth::guard('pegawai')->user()->photo == NULL)
                                    <img src="{{asset('gambar/profil/default.jpg')}}" width="150px" height="150px" class="img-fluid rounded-circle">
                                @else
                                    <img src="{{asset('gambar/profil/'. Auth::guard('pegawai')->user()->photo)}}" width="150px" height="150px" class="img-fluid rounded-circle">
                                @endif
                                    
                                    <hr>
                                    <div class="table responsive">
                                        <table class="table table-bordered table-striped">
                                            <tbody>
                                                <tr>
                                                    <td width="150px">NIP</td>
                                                    <td width="20px"> : </td>
                                                    <td>{{Auth::guard('pegawai')->user()->nip}}</td>
                                                </tr>
                                                <tr>
                                                    <td width="150px">Nama</td>
                                                    <td width="20px"> : </td>
                                                    <td>{{Auth::guard('pegawai')->user()->nama}}</td>
                                                </tr>
                                                <tr>
                                                    <td width="150px">Username</td>
                                                    <td width="20px"> : </td>
                                                    <td>{{Auth::guard('pegawai')->user()->username}}</td>
                                                </tr>
                                                <tr>
                                                    <td width="150px">Golongan</td>
                                                    <td width="20px"> : </td>
                                                    <td>{{Auth::guard('pegawai')->user()->golongan}}</td>
                                                </tr>
                                                <tr>
                                                    <td width="150px">Jabatan</td>
                                                    <td width="20px"> : </td>
                                                    <td>{{Auth::guard('pegawai')->user()->jabatan}}</td>
                                                </tr>
                                                <tr>
                                                    <td width="150px">Email</td>
                                                    <td width="20px"> : </td>
                                                    <td>{{Auth::guard('pegawai')->user()->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td width="150px">Roles</td>
                                                    <td width="20px"> : </td>
                                                    <td>
                                                        @if(!empty(Auth::guard('pegawai')->user()->roles))
                                                            @foreach(Auth::guard('pegawai')->user()->roles as $r)
                                                                <label class="badge badge-success">{{ $r->name }}</label>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2"><br>
                                    <form class="form-horizontal" action="{{route('profil.update', Auth::guard('pegawai')->user()->id_pegawai)}}" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="box-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2">Nama</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" value="{{Auth::guard('pegawai')->user()->nama}}" name="nama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Username</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" value="{{Auth::guard('pegawai')->user()->username}}" name="username">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Jenis Kelamin</label>
                                                <div class="col-sm-6">
                                                @if(Auth::guard('pegawai')->user()->jk == 'Laki-Laki')
                                                    <label class="form-check custom-radio">
                                                        <input type="radio" name="jk" class="form-check-input" value="Laki-Laki" checked>
                                                        <span class="form-check-indicator"></span>
                                                        <span class="form-check-description">Laki-Laki</span>
                                                    </label>
                                                    <label class="form-check custom-radio">
                                                        <input type="radio" name="jk" class="form-check-input" value="Perempuan">
                                                        <span class="form-check-indicator"></span>
                                                        <span class="form-check-description">Perempuan</span>
                                                    </label>
                                                @elseif(Auth::guard('pegawai')->user()->jk == 'Perempuan')
                                                    <label class="form-check custom-radio">
                                                        <input type="radio" name="jk" class="form-check-input" value="Laki-Laki">
                                                        <span class="form-check-indicator"></span>
                                                        <span class="form-check-description">Laki-Laki</span>
                                                    </label>
                                                    <label class="form-check custom-radio">
                                                        <input type="radio" name="jk" class="form-check-input" value="Perempuan" checked>
                                                        <span class="form-check-indicator"></span>
                                                        <span class="form-check-description">Perempuan</span>
                                                    </label>
                                                @else
                                                    <label class="form-check custom-radio">
                                                        <input type="radio" name="jk" class="form-check-input" value="Laki-Laki">
                                                        <span class="form-check-indicator"></span>
                                                        <span class="form-check-description">Laki-Laki</span>
                                                    </label>
                                                    <label class="form-check custom-radio">
                                                        <input type="radio" name="jk" class="form-check-input" value="Perempuan">
                                                        <span class="form-check-indicator"></span>
                                                        <span class="form-check-description">Perempuan</span>
                                                    </label>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Email</label>
                                                <div class="col-sm-6">
                                                    <input type="email" class="form-control" value="{{Auth::guard('pegawai')->user()->email}}" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Photo</label>
                                                <div class="col-sm-6">
                                                    <input type="file" class="form-control" value="" name="photo">
                                                    <small>Kosongi Jika Tidak Diganti</small>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-sm btn-info">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_3"><br>
                                    <form class="form-horizontal" action="{{ route('pegawai.changePassword') }}" method="POST">
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group row {{ $errors->has('current-password') ? ' has-error' : '' }}">
                                                <label class="col-sm-3">Current Password</label>
                                                <div class="col-sm-5">
                                                    <input id="current-password" type="password" class="form-control" value="" required name="current-password">
                                                    @if ($errors->has('current-password'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('current-password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row {{ $errors->has('new-password') ? ' has-error' : '' }}">
                                                <label class="col-sm-3">New Password</label>
                                                <div class="col-sm-5">
                                                    <input id="new-password"  type="password" class="form-control" value="" name="new-password" required>
                                                    @if ($errors->has('new-password'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('new-password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3">Confirm New Password</label>
                                                <div class="col-sm-5">
                                                    <input id="new-password-confirm" type="password" class="form-control" value="" name="new-password_confirmation" required>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-sm btn-primary">Change Password</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.tile -->
        </div>
    </div>
    <!-- /.row -->
</div> 
<!-- /.container -->
@endsection

@push('js')
<script>
$('.alert').delay(3000).slideUp(400);
</script>
@endpush()