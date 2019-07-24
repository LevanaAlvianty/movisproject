@extends('layouts.spi.master')
@section('title', 'Data Kelompok Akun')
@push('css')
@endpush

@section('judulapp')
    <div>
          <h1><i class="fa fa-calculator"></i> Kelompok Akun</h1>
          <p>Data Kelompok Akun</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Kelompok Akun</a></li>
        <li class="breadcrumb-item"><a href="#">Data Kelompok Akun</a></li>
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
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_1">Kelola Kelompok Akun</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_2">Tambah Kelompok Akun</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1"><br>
                                    <div class="table responsive">
                                    <table class="table table-bordered table-striped dt-responsive " id="tabelkelompok">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">kelompok Akun</th>
                                                <th class="text-center">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $j = 0;
                                            ?>
                                             @foreach($kelompok as $k) 
                                            <tr>
                                                <td>{{ ++$j }}</td>
                                                <td>{{$k->kelompok}}</td> 
                                                <td>
                                                    <a href="{{ route('kelompok-akun.edit', $k->id_kelompok) }}" class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i></a>
                                                    <a href="{{ route('kelompok-akun.show', $k->id_kelompok) }}" class="btn btn-sm btn-warning"><i class="icon fa fa-eye"></i></a>
                                                    <button class="btn btn-sm btn-danger" data-kelompokid="{{$k->id_kelompok}}" data-toggle="modal" data-target="#deleteData"><i class="icon fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                   
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2"><br>
                                    <form class="form-horizontal" action="{{ route('kelompok-akun.store') }}" method="POST">
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2">Kelompok Akun</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="kelompok" placeholder="Kelompok Akun">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="input" class="col-sm-2 col-form-label">Akun</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select"  name="id_akun" id="id_akun" placeholder="Pilih Akun">
                                                        @foreach ($akun as $a)
                                                        <option value="{{ $a->id_akun }}">
                                                            {{ $a->akun }} {{ $a->nama_akun}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-sm btn-success"><i class="icon fa fa-plus"></i> Tambah Data</button>
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
            <h5 class="modal-title text-center">Hapus Data Kelompok Akun</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div> 
        <form method="POST" action="{{route('kelompok-akun.destroy','test')}}">
            {{ method_field('DELETE') }} 
            {{ csrf_field() }}
            <div class="modal-body">
                <p>Apakah Anda yakin untuk menghapus data ini?</p>
                <input type="hidden" name="kelompok_id" id="kelompok_id" />
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
        $('#tabelkelompok').DataTable({
            "paging"    : true,
            "ordering"  : true,
            "info"      : true,
            "searching" : true,
            "autoWidth" : false,
            "LengthChange" : false,
            "responsive":true
        });
    });

    $('#deleteData').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget) // Button yg memicu modal
        var id_kelompok = button.data('kelompokid'); //mengambil info dari atribut data-*
        var modal = $(this)

        modal.find('.modal-body #kelompok_id').val(id_kelompok);
    });
</script>
<script>
$('.alert').delay(3000).slideUp(300);
</script>

@endpush()