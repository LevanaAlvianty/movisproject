@extends('layouts.spi.master')
@section('title', 'Data Program Utama')
@push('css')
@endpush

@section('judulapp')
    <div>
          <h1><i class="fa fa-list-ul"></i> Program Utama</h1>
          <p>Data Program Utama</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Program Utama</a></li>
        <li class="breadcrumb-item"><a href="#">Data Program Utama</a></li>
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
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_1">Kelola Program Utama</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_2">Tambah Program Utama</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1"><br>
                                    <div class="table responsive">
                                    <table class="table table-bordered table-striped dt-responsive " id="tabelprogram">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Program Utama</th>
                                                <th class="text-center">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i = 0;
                                            ?>
                                             @foreach($program as $p) 
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{$p->dirprogutama}}</td> 
                                                <td>
                                                    <a href="{{ route('programutama.edit', $p->id_dirprogutama) }}" class="btn btn-sm btn-primary"><i class="icon fa fa-edit"></i></a>
                                                    <a href="{{ route('programutama.show', $p->id_dirprogutama) }}" class="btn btn-sm btn-warning"><i class="icon fa fa-eye"></i></a>
                                                    <button class="btn btn-sm btn-danger" data-progid="{{$p->id_dirprogutama}}" data-toggle="modal" data-target="#deleteData"><i class="icon fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                   
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2"><br>
                                    <form class="form-horizontal" action="{{ route('programutama.store') }}" method="POST">
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2">Program Utama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="dirprogutama" placeholder="Program Utama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Tahun Penetapan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="tahun_penetapan" placeholder="Tahun Penetapan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2">Status</label>
                                                <div class="col-sm-10">
                                                    <label class="form-check custom-radio">
                                                        <input type="radio" name="status" class="form-check-input" value="N">
                                                        <span class="form-check-indicator"></span>
                                                        <span class="form-check-description">No</span>
                                                    </label>
                                                    <label class="form-check custom-radio">
                                                        <input type="radio" name="status" class="form-check-input" value="Y">
                                                        <span class="form-check-indicator"></span>
                                                        <span class="form-check-description">Yes</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="input" class="col-sm-2 col-form-label">Renstra</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control b"  name="id_renstra" id="renstra" placeholder="Pilih Renstra">
                                                        @foreach ($renstra as $r)
                                                        <option value="{{ $r->id_renstra }}">
                                                            {{ $r->renstra }}
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
<!-- Modal Delete -->
<div class="modal fade" id="deleteData" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h5 class="modal-title text-center">Hapus Data Program Utama</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div> 
        <form method="POST" action="{{route('programutama.destroy','test')}}">
            {{ method_field('DELETE') }} 
            {{ csrf_field() }}
            <div class="modal-body">
                <p>Apakah Anda yakin untuk menghapus data ini?</p>
                <input type="hidden" name="prog_id" id="prog_id" />
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
        $('#tabelprogram').DataTable({
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
        var id_prog = button.data('progid'); //mengambil info dari atribut data-*
        var modal = $(this)

        modal.find('.modal-body #prog_id').val(id_prog);
    });
</script>
<script>
$('.alert').delay(3000).slideUp(300);
</script>

@endpush()