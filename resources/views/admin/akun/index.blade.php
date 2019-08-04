@extends('layouts.spi.master')
@section('title', 'Data Akun')

@section('judulapp')
    <div>
          <h1><i class="fa fa-calculator"></i> Akun</h1>
          <p>Data Akun</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Akun</a></li>
        <li class="breadcrumb-item"><a href="#">Data Akun</a></li>
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
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_1">Kelola Akun</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_2">Tambah Akun</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1"><br>
                                    <div class="table responsive">
                                    <table class="table table-bordered table-striped dt-responsive " id="tabelakun">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Akun</th>
                                                <th class="text-center">Nama Akun</th>
                                                <th class="text-center">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i = 0;
                                            ?>
                                            @foreach ($akuns as $akun)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{$akun->akun}}</td> 
                                                <td>{{$akun->nama_akun}}</td> 
                                                <td>
                                                    <a href="{{ route('akun.edit', $akun->id_akun) }}" class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i></a>
                                                    <a href="{{ route('akun.show', $akun->id_akun) }}" class="btn btn-sm btn-warning"><i class="icon fa fa-eye"></i></a>
                                                    <button class="btn btn-sm btn-danger" data-akunid="{{$akun->id_akun}}" data-toggle="modal" data-target="#deleteData"><i class="icon fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                   
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2"><br>
                                    <form class="form-horizontal" action="{{ route('akun.store') }}" method="POST">
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2">Akun</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="akun" placeholder="Akun">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Nama Akun</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nama_akun" placeholder="Nama Akun">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Keterangan</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="ket_akun" id="ket_akun" style="resize:none" rows="3" placeholder="Keterangan Akun"></textarea>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-sm btn-success"><i class="icon fa fa-plus"> </i>Tambah Akun</button>
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
            <h5 class="modal-title text-center">Hapus Data Akun</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div> 
        <form method="POST" action="{{route('akun.destroy','test')}}">
            {{ method_field('DELETE') }} 
            {{ csrf_field() }}
            <div class="modal-body">
                <p>Apakah Anda yakin untuk menghapus data ini?</p>
                <input type="hidden" name="akun_id" id="akun_id" />
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
        $('#tabelakun').DataTable({
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
        var akun_id = button.data('akunid'); //mengambil info dari atribut data-*
        var modal = $(this)

        modal.find('.modal-body #akun_id').val(akun_id);
    });
</script>
<script>
$('.alert').delay(3000).slideUp(300);
</script>

@endpush()