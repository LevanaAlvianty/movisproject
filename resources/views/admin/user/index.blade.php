@extends('layouts.spi.master')
@section('title', 'Data Pegawai')

@section('judulapp')
    <div>
          <h1><i class="fa fa-group"></i> Pegawai</h1>
          <p>Data Pegawai</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
        <li class="breadcrumb-item"><a href="#">Data Pegawai</a></li>
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
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">NIP</th>
                                                <th class="text-center">Role</th>
                                                <th class="text-center">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pegawai as $p )
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$p->nama}}</td>
                                                <td class="text-center">{{$p->nip}}</td> 
                                                <td>
                                                    @if(!empty($p->roles))
                                                        @foreach($p->roles as $r)
                                                            <label class="badge badge-success">{{ $r->name }}</label>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('pegawai.edit', $p->id_pegawai) }}" class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i></a>
                                                    <a href="{{ route('pegawai.show', $p->id_pegawai) }}" class="btn btn-sm btn-warning"><i class="icon fa fa-eye"></i></a>
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
                                                    <input type="text" class="form-control" name="nip" placeholder="NIP">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Nama</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Username</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Golongan</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="golongan" placeholder="Golongan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Jabatan</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Jurusan/Bagian/Unit Pusat</label>
                                                <div class="col-sm-6">
                                                    <select class="custom-select" id="jurusan" name="jurusan" placeholder="Jurusan/Bagian/Unit Pusat"> 
                                                        <option class="active">Pilih Salah Satu...</option>
                                                            @foreach ($kodeunit as $k)
                                                                <option value="{{ $k->kode }}">{{ $k->jurbagnitpus }} ({{ $k->kode }})</option>
                                                            @endforeach
                                                    </select>
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
                                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Confirm Password</label>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password">
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <a href="{{ route('pegawai.index')}}" class="btn btn-sm btn-danger"><i class="icon fa fa-times"> </i>Batal</a>
                                                <button type="submit" class="btn btn-sm btn-success"><i class="icon fa fa-plus"></i> Tambah Akun</button>
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
<script>
$(document).ready(function() {
    $("#jurusan").select2({
        width: '100%',
        placeholder: 'Pilih Kode Unit Jurusan',
        allowClear: true,
        theme: "bootstrap",
    });
    $(window).resize(function() {
        $('#jurusan').css('width', "100%");
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabeluser').DataTable({
            "paging"    : true,
            "ordering"  : true,
            "info"      : true,
            "searching" : true,
            "autoWidth" : false,
            "LengthChange" : false,
            "responsive":true,
            "language": {
                "lengthMenu": "Menampilkan _MENU_ data",
                "zeroRecords": "Tidak Ditemukan - maaf",
                "info":"Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "infoEmpty":"Menampilkan 0 sampai 0 dari 0 data",
                "search":"Cari :",
            }
        });
    });

    $('#deleteData').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget) // Button yg memicu modal
        var user_id = button.data('userid'); //mengambil info dari atribut data-*
        var modal = $(this)

        modal.find('.modal-body #user_id').val(user_id);
    });
</script>
<script>
$('.alert').delay(3000).slideUp(300);
</script>

@endpush()