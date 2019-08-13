<section>
<h5 style="text-align:center"><b>Halaman Pengesahan</b></h5><br>   
    <div class="row mb-2">
        <div class="col-sm-4">
            <label>1. Judul</label>
        </div>
        <div class="col-sm-8">
        <input type="text" class="form-control form-control-sm" id="judul" name="judul" placeholder="Judul Laporan" value="{{$kegiatanpo->nama_kegiatan}}">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-sm-4">
            <label>2. Acuan</label>
        </div>
        <div class="col-sm-8">
            <select class="custom-select custom-select-sm" id="renstra" placeholder="Program utama dalam Renstra yang diacu">
                @foreach($programutama as $program)
                    <option value="{{ $program->id_dirprogutama }}"
                        @if($program->id_dirprogutama == $proposal->id_dirprogram )
                            selected
                        @endif>  
                        {{ $program->dirprogutama }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
                        
    <div class="form-group">
        <label for="" class="" style="align:left">3. Pembiayaan</label>
        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">a. Paguyang diajukan</label>
            </div>
            <div class="col-sm-8 ">
            <input type="text" class="form-control form-control-sm" id="paguyang" placeholder="Paguyang" value="{{$proposal->pagu}}">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">b. MAK</label>
            </div>
            <div class="col-sm-8 ">
            <input type="text" class="form-control form-control-sm" id="mak" placeholder="MAK" value="{{$proposal->mak}}">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">c. Anggaran</label>
            </div>
            <div class="col-sm-8 ">
            <select class="custom-select custom-select-sm" id="kelanggaran" placeholder="" value="">
                    <option class="active">RM/BOPTN/PNBP</option>
                    @foreach($kelompokanggaran as $kelang)
                        <option value="{{ $kelang->id_kelang }}"
                            @if($kelang->kelompokanggaran == $kegiatanpo->sumber )
                                selected
                            @endif>               
                                {{ $kelang->kelompokanggaran }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="" class="">4. Ketua Pelaksana Kegiatan</label>
        <div class="row">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">a. Nama</label>
            </div>
            <div class="col-sm-8 ">
            <input type="text" class="form-control form-control-sm" id="nama_pelaksana" name="nama_pelaksana" placeholder="Ketua Pelaksana" value="{{Auth::guard('pegawai')->user()->nama}}" >
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">b. Jenis Kelamin</label>
            </div>
            <div class="form-inline col-sm-8">
                @if(Auth::guard('pegawai')->user()->jk == 'Laki-Laki')
                <label class="form-check custom-radio mr-3">
                    <input type="radio" class="form-check-input" value="Laki-Laki" checked>
                    <span class="form-check-indicator"></span>
                    <span class="form-check-description">Laki-Laki</span>
                </label>
                <label class="form-check custom-radio">
                    <input type="radio" class="form-check-input" value="Perempuan">
                    <span class="form-check-indicator"></span>
                    <span class="form-check-description">Perempuan</span>
                </label>
                @elseif(Auth::guard('pegawai')->user()->jk == 'Perempuan')
                <label class="form-check custom-radio mr-3">
                    <input type="radio" class="form-check-input" value="Laki-Laki">
                    <span class="form-check-indicator"></span>
                    <span class="form-check-description">Laki-Laki</span>
                </label>
                <label class="form-check custom-radio">
                    <input type="radio" class="form-check-input" value="Perempuan" checked>
                    <span class="form-check-indicator"></span>
                    <span class="form-check-description">Perempuan</span>
                </label>
                @else
                <label class="form-check custom-radio mr-3">
                    <input type="radio" class="form-check-input" value="Laki-Laki">
                    <span class="form-check-indicator"></span>
                    <span class="form-check-description">Laki-Laki</span>
                </label>
                <label class="form-check custom-radio">
                    <input type="radio" class="form-check-input" value="Perempuan">
                    <span class="form-check-indicator"></span>
                    <span class="form-check-description">Perempuan</span>
                </label>
                @endif
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">c. NIP</label>
            </div>
            <div class="col-sm-8 ">
                <input type="text" class="form-control form-control-sm" id="nip_pelaksana" name="nip_pelaksana" placeholder="Nomor Induk Pegawai (NIP)" value="{{Auth::guard('pegawai')->user()->nip}}" >
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">d. Jabatan Struktural</label>
            </div>
            <div class="col-sm-8 ">
                <input type="text" class="form-control form-control-sm" id="jabstruk" placeholder="Jabatan Struktural" value="{{$proposal->jab_struktural}}">
            </div>
        </div>
                            
        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">e. Jabatan Fungsional</label>
            </div>
            <div class="col-sm-8 ">
                <input type="text" class="form-control form-control-sm" id="jabfung" placeholder="Jabatan Fungsional" value="{{Auth::guard('pegawai')->user()->jabatan}}" >
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">f. Unit Pelaksana</label>
            </div>
            <div class="col-sm-8 ">
                <input type="text" class="form-control form-control-sm" id="unitpel" placeholder="Unit Pelaksana" value="{{ $kegiatanpo->jurbagnitpus->jurbagnitpus }}">
            </div>
        </div>
    </div>
                        
    <div class="form-group">
        <label for="" class="">5. Pelaksanaan</label>
        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">a. Bulan/Minggu</label>
            </div>
            
            <div class="form-inline col-sm-8">
                <input type="date" class="form-control form-control-sm" id="tglmulai" placeholder="Tanggal Mulai" value="{{ $proposal->tglmulai }}" >
                
                <label for="" class="ml-3 mr-3">s.d</label>
                <input type="date" class="form-control form-control-sm" id="tglselesai" placeholder="Tanggal Selesai" value="{{ $proposal->tglselesai }}">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">b. Tempat</label>
            </div>
            <div class="col-sm-8 ">
                <input type="text" class="form-control form-control-sm" id="tempat" placeholder="Tempat" value="{{$proposal->tempat}}">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="" class="">6. Target yang diharapkan</label>
        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">a. Luaran</label>
            </div>
            <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="luaran" placeholder="Luaran" value="{{$proposal->target_luaran}}">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-4">
                <label for="" class="ml-sm-3">b. Dampak yang timbul</label>
            </div>
            <div class="col-sm-8 ">
                <textarea class="form-control form-control-sm" style="resize:none" id="" rows="4" cols="1" 
                placeholder="Dampak yang timbul">{{$proposal->dampak}}
                </textarea>
            </div>
        </div>
    </div><br>

    <div class="row justify-content-end">
        <div class="col-sm-2">
            <label for="formGroupExampleInput" >Semarang, </label>
        </div>
        <div class="col-sm-3">
            <input type="date" class="form-control form-control-sm" id="tgl" name="tgltulis" placeholder="Tanggal Bulan Tahun" value="{{$laporan->tgltulis}}">
        </div> 
    </div>

    <div class="row justify-content-between">
        <div class="col-sm-5">
            <label for="formGroupExampleInput" class="">Menyetujui, </label>
            <select class="custom-select custom-select-sm unitpelaksana" id="unitpelaksana">
                <option value="0" disable="true" selected>Pilih Salah Satu...</option>
                @foreach($pejabat as $pej)
                    <option value="{{ $pej->jabatan}}"
                        @if($pej->jabatan == $proposal->jab_unitpelaksana )
                                selected
                        @endif>           
                        {{ $pej->jabatan }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-5">
            <label for="formGroupExampleInput" class="">Ketua Pelaksana, </label>
        </div>  
    </div><br><br>

    <div class="row justify-content-between">
        <div class="col-sm-5">
            
            <input type="text" class="form-control form-control-sm mb-2 nama_up" id="nama_up" placeholder="Nama Unit Pelaksana" value="{{$proposal->nama_unitpelaksana}}">
            
            <div class="form-inline">
                <label for="formGroupExampleInput" class="mr-sm-3">NIP</label>
                <input type="text" class="form-control form-control-sm" id="nip_up" placeholder="NIP" value="{{$proposal->nip_unitpelaksana}}">
            </div>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control form-control-sm mb-2" id="" name="nama_pelaksana" placeholder="Nama Ketua Pelaksana" value="{{Auth::guard('pegawai')->user()->nama}}" >
            <div class="form-inline">
                <label for="formGroupExampleInput" class="mr-sm-3">NIP</label>
                <input type="text" class="form-control form-control-sm" id="" name="nip_pelaksana" placeholder="NIP Ketua Pelaksana" value="{{Auth::guard('pegawai')->user()->nip}}" >
            </div>
        </div>  
    </div><br><br>

    <div class="row justify-content-between">
        <div class="col-sm-5">
            <label for="formGroupExampleInput" class="">Menyetujui, </label>
            <select class="custom-select custom-select-sm wadir_1" id="wadir_1">
                <option value="0" disable="true" selected>Pilih Salah Satu...</option>
                @foreach($pejabat as $pej)
                    <option value="{{ $pej->jabatan}}"
                        @if($pej->jabatan == $proposal->jab_wadir1)
                                selected
                        @endif> 
                        {{ $pej->jabatan }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-5">
            <label for="formGroupExampleInput" class="">Mengetahui, </label>
            <select class="custom-select custom-select-sm wadir_2" id="wadir_2">
                <option value="0" disable="true" selected>Pilih Salah Satu...</option>
                @foreach($pejabat as $pej)
                    <option value="{{ $pej->jabatan}}"
                        @if($pej->jabatan == $proposal->jab_wadir2 )
                                selected
                        @endif> 
                        {{ $pej->jabatan }}</option>
                @endforeach
            </select>
        </div>  
    </div><br><br>

    <div class="row justify-content-between">
        <div class="col-sm-5">
            <input type="text" class="form-control form-control-sm mb-2" id="wadir1" placeholder="Wadir 1" value="{{$proposal->nama_wadir1}}" >
            <div class="form-inline">
                <label for="formGroupExampleInput" class="mr-sm-3">NIP</label>
                <input type="text" class="form-control form-control-sm" id="nip_wadir1" placeholder="NIP" value="{{$proposal->nip_wadir1}}">
            </div>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control form-control-sm mb-2" id="wadir2" placeholder="Wadir 2" value="{{$proposal->nama_wadir2}}">
            <div class="form-inline">
                <label for="formGroupExampleInput" class="mr-sm-3">NIP</label>
                <input type="text" class="form-control form-control-sm" id="nip_wadir2" placeholder="NIP" value="{{$proposal->nip_wadir2}}">
            </div>
        </div>  
    </div><br><br>

    <div class="justify-content-center">
        <div class="col-sm-2  mx-auto">
            <label for="formGroupExampleInput" class="">Mengetahui, </label>
        </div>
        <div class="col-sm-2 mx-auto">
            <label for="formGroupExampleInput">Direktur</label>
        </div>
    </div><br><br>

    <div class="justify-content-center">
        <div class="col-sm-5 mx-auto">
            <input type="text" class="form-control form-control-sm mb-2" id="" placeholder="Direktur" value="{{$proposal->nama_direktur}}" >
            <div class="form-inline">
                <label for="formGroupExampleInput" class="mr-sm-3">NIP</label>
                <input type="text" class="form-control form-control-sm" id="NIP_Dir" placeholder="NIP" value="{{$proposal->nip_direktur}}" >
            </div>
        </div>
    </div>         
</section> 

@push('js')
<script type="text/javascript">
//unitpelaksana
$(document).ready(function(){
    //unitpelaksana
    $(document).on('change','.unitpelaksana',function(){
        var unit_id = $(this).val();
        console.log(unit_id);
        var op = ""; 
             $.ajax({
                type:'get',
                url:'{!!URL::to('findData')!!}',
                data:{'id':unit_id},
                dataType:'json',
                success:function(data){
                    console.log("name");
                    console.log(data.name);
                    console.log(data.nip);

                    $('#nama_up').val(data.name);
                    $('#nip_up').val(data.nip);
              },
              error:function(){
            }
        });
    });

    //wadir1
    $(document).on('change','.wadir_1',function(){
        var wadir1_id = $(this).val();
        console.log(wadir1_id);
        var op = ""; 
            $.ajax({
                type:'get',
                url:'{!!URL::to('findData')!!}',
                data:{'id':wadir1_id},
                dataType:'json',
                success:function(data){
                    console.log("name");
                    console.log(data.name);
                    console.log(data.nip);

                $('#wadir1').val(data.name);
                $('#nip_wadir1').val(data.nip);
            },
            error:function(){
            }
        });
    });

    //wadir2
    $(document).on('change','.wadir_2',function(){
        var wadir2_id = $(this).val();
        console.log(wadir2_id);
        var op = ""; 
            $.ajax({
                type:'get',
                url:'{!!URL::to('findData')!!}',
                data:{'id':wadir2_id},
                dataType:'json',
                success:function(data){
                    console.log("name");
                    console.log(data.name);
                    console.log(data.nip);

                $('#wadir2').val(data.name);
                $('#nip_wadir2').val(data.nip);
            },
            error:function(){
            }
        });
    });

});
</script>
@endpush()
