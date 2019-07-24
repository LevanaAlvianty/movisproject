@extends('layouts.spi.master')
@section('title', 'Data Barang')
@push('css')
@endpush

@section('judulapp')
    <div>
          <h1><i class="fa fa-calculator"></i> Barang</h1>
          <p>Data Barang</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Barang</a></li>
        <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
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
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_1">Kelola Barang</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_2">Tambah Barang</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1"><br>
                                    <div class="table responsive">
                                    <table class="table table-bordered table-striped dt-responsive " id="tabelbarang">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center" width="20px">No</th>
                                                <th class="text-center" width="50px">Akun</th>
                                                <th class="text-center" width="120px">Kelompok Akun</th>
                                                <th class="text-center" width="120px">Nama Barang</th>
                                                <th class="text-center" width="80px">Harga Satuan</th>
                                                <th class="text-center" width="120px">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $j = 0;
                                            ?>
                                             @foreach($barang as $brg) 
                                            <tr>
                                                <td>{{ ++$j }}</td>
                                                <td>
                                                    @foreach ($akun as $a)
                                                        @if($a->id_akun == $brg->id_akun)
                                                            {{ $a->akun }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($kelompok as $kel)
                                                        @if($kel->id_kelompok == $brg->id_kelompok)
                                                            {{ $kel->kelompok }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{$brg->namabarang}}</td> 
                                                <td class="text-center">{{$brg->hargasatuan}}</td> 
                                                <td>
                                                    <a href="{{ route('barang.edit', $brg->id_standartbiaya) }}" class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i></a>
                                                    <a href="{{ route('barang.show', $brg->id_standartbiaya) }}" class="btn btn-sm btn-warning"><i class="icon fa fa-eye"></i></a>
                                                    <button class="btn btn-sm btn-danger" data-barangid="{{$brg->id_standartbiaya}}" data-toggle="modal" data-target="#deleteData"><i class="icon fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                   
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2"><br>
                                    <form class="form-horizontal" action="{{ route('barang.store') }}" method="POST">
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2">Nama Barang</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="namabarang" placeholder="Nama Barang">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Harga Satuan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hargasatuan" placeholder="Harga Satuan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Acuan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="acuan" placeholder="Acuan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="input" class="col-sm-2 col-form-label">Satuan</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select"  name="id_satuan" id="id_satuan" placeholder="Pilih Satuan">
                                                        @foreach ($satuan as $s)
                                                        <option value="{{ $s->id_satuan}}">
                                                            {{ $s->satuan }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="input" class="col-sm-2 col-form-label">Akun</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select"  name="id_akun" id="id_akun" placeholder="Pilih Akun">
                                                        @foreach ($akun as $a)
                                                        <option value="{{ $a->id_akun}}">
                                                            {{ $a->akun }} {{ $a->nama_akun }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="input" class="col-sm-2 col-form-label">Kelompok Akun</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select"  name="id_kelompok" id="id_kelompok" placeholder="Pilih Kelompok">
                                                        @foreach ($kelompok as $k)
                                                        <option value="{{ $k->id_kelompok}}">
                                                            {{ $k->kelompok }}
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
            <h5 class="modal-title text-center">Hapus Data Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div> 
        <form method="POST" action="{{route('barang.destroy','test')}}">
            {{ method_field('DELETE') }} 
            {{ csrf_field() }}
            <div class="modal-body">
                <p>Apakah Anda yakin untuk menghapus data ini?</p>
                <input type="hidden" name="barang_id" id="barang_id" />
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
        $('#tabelbarang').DataTable({
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
        var id_barang = button.data('barangid'); //mengambil info dari atribut data-*
        var modal = $(this)

        modal.find('.modal-body #barang_id').val(id_barang);
    });
</script>
<script>
$('.alert').delay(3000).slideUp(300);
</script>

@endpush()