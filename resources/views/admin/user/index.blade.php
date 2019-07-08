@extends('layouts.spi.master')
@section('title', 'Data User')

@section('judulapp')
    <div>
          <h1><i class="fa fa-group"></i> User</h1>
          <p>Data User</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">User</a></li>
        <li class="breadcrumb-item"><a href="#">Data User</a></li>
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
                        <button type="button" class="close" data-dismiss="alert"></button>
                        {{Session::get('success')}}
                    </div>
                @endif
                    <!-- Box -->
                    <div class="box">
                        <div class="bs-component">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_1">Kelola User</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_2">Tambah User</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1"><br>
                                    <div class="table responsive">
                                    <table class="table table-bordered table-striped dt-responsive " id="tabeluser">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Nama</th>
                                                <th>NIP</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pegawai as $p )
                                            <tr>
                                                <td>{{$p->nama}}</td>
                                                <td>{{$p->nip}}</td> 
                                                <td>
                                                    <a href="{{ route('pegawai.edit', $p->id_pegawai) }}" class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i></a>
                                                    <a href="#" value="" class="btn btn-sm btn-warning waves-effect modalMd" data-toggle="modal" title="Detail Kegiatan PO" data-target="#modalMd">
                                                    <i class="icon fa fa-eye"></i></a>
                                                    <button class="btn btn-sm btn-danger" data-userid="{{$p->id_pegawai}}" data-toggle="modal" data-target="#deleteData"><i class="icon fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                   
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2"><br>
                                    <form class="form-horizontal" action="{{ route('pegawai.store') }}" method="POST">
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2">NIP</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="nip">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Nama</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="nama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Golongan</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="golongan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Jabatan</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="jabatan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Role</label>
                                                <div class="col-sm-6">
                                                    <select name="role" id="" class="form-control">
                                                        <option value="admin">Admin</option>
                                                        <option value="admin_perencanaan">Admin Perencanaan</option>
                                                        <option value="admin_spi">Admin SPI</option>
                                                        <option value="pic">PIC</option>
                                                        <option value="pimpinan">Pimpinan</option>
                                                        <option value="reviewer_spi">Reviewer SPI</option>
                                                        <option value="reviewer_anggaran">Reviewer Anggaran</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Password</label>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Confirm Password</label>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control" name="password_confirmation">
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <a href="{{ route('pegawai.index')}}" class="btn btn-sm btn-danger">Batal</a>
                                                <button type="submit" class="btn btn-sm btn-success">Tambah Akun</button>
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

<!-- Modal Delete -->
<div class="modal fade" id="deleteData" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h5 class="modal-title text-center">Hapus Data User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div> 
        <form method="POST" action="{{route('pegawai.destroy','test')}}">
            {{ method_field('DELETE') }} 
            {{ csrf_field() }}
            <div class="modal-body">
                <p>Apakah Anda yakin untuk menghapus data ini?</p>
                <input type="hidden" name="user_id" id="user_id" />
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
            </div> 
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabeluser').DataTable({
            "paging"    : true,
            "ordering"  : true,
            "info"      : false,
            "searching" : false,
            "autoWidth" : false,
            "LengthChange" : false,
            "responsive":true
        });
    });

    $('#deleteData').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget) // Button yg memicu modal
        var user_id = button.data('userid'); //mengambil info dari atribut data-*
        var modal = $(this)

        modal.find('.modal-body #user_id').val(user_id);
    });
</script>

@endpush()