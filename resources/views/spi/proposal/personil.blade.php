<h5 style="text-align:left"><b>D. Personil</b></h5>
<p>Adapun susunan panitia yang terlibat dalam kegiatan ini adalah sebagai berikut : </p>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th width="35%" class="text-center">Nama</th>
                    <th width="35%" class="text-center">NIP</th>
                    <th width="25%" class="text-center">Peran</th>
                    <th width="5%" class="text-center">Option</th>
                </tr>
            </thead>
            <tbody id="panitia-dalam" class="panitia-dalam">
                @if ($proposal->panitiadalampos)
                    @foreach ($proposal->panitiadalampos as $i => $panitiadalam)
                        <tr id="row_panitiadalam_{{ $i }}" class="panitiadalam-tr">
                            <td width="35%">
                                <select class="form-control nama_panitiadlm"  name="nama_panitiadlm[{{ $i }}]" id="nama_panitiadlm" placeholder="Pilih Panitia" style="width: 100%">
                                    @foreach ($pegawai as $pgw)
                                        <option value="{{ $pgw->id_pegawai }}"
                                            @if($pgw->id_pegawai == $panitiadalam->id_panitiadalam)
                                                selected
                                            @endif> 
                                        {{ $pgw->nama }}</option>
                                    @endforeach
                                </select>
                            <td width="35%"><input name="nip_panitiadlm[{{ $i }}]" class="form-control nip_panitiadlm"  value="{{$panitiadalam->nip}}"/></td>
                            <td width="25%"><input name="peran_panitiadlm[{{ $i }}]" class="form-control"  value="{{$panitiadalam->peran}}"/></td>
                            <td width="5%" class="text-center"><a href="#" id="{{ $i}}" class="btn btn-danger btn-sm removePanitiadlm"><i class="fa fa-lg fa-times"></i></a></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td></td> <td></td> <td></td>
                    <td><a href="#" id="addPanitiadlm" class="btn btn-sm btn-success pull-right addPanitiadlm"><i class="fa fa-lg fa-plus"></i> Tambah</a></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <hr>
                        
<br><p style="font-weight:bold"> * Apabila ada pelibatan dengan personil dari luar Polines, maka <b>wajib</b> 
        mencantumkan datanya pada tabel berikut : 
        <br><span style="color:red">** Jika mencantumkan data personil dari luar Polines, wajib melampirkan CV</span>
    </p>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th width="30%" class="text-center">Nama</th>
                    <th width="25%" class="text-center">NIP</th>
                    <th width="15%" class="text-center">NPWP</th>
                    <th width="10%" class="text-center">Curriculum Vitae</th>
                    <th width="5%" class="text-center">Option</th>
                </tr>
            </thead>
            <tbody id="panitia-luar" class="panitia-luar">
                @if($proposal->panitialuarpos)
                    @foreach($proposal->panitialuarpos as $i => $panitialuar)
                        <tr id="row_panitialuar_{{ $i }}" class="panitialuar-tr">
                            <td width="30%"><input name="nama_panitialuar[{{ $i }}]" class="form-control form-control-sm" value="{{$panitialuar->nama}}"/></td>
                            <td width="25%"><input name="nip_panitialuar[{{ $i }}]" class="form-control form-control-sm" value="{{$panitialuar->nip}}"/></td>
                            <td width="15%"><input name="npwp_panitialuar[{{ $i }}]" class="form-control form-control-sm" value="{{$panitialuar->npwp}}"/></td>
                            <td width="10%">
                                <input name="cv_panitialuar_hidden[{{ $i }}]" type="hidden" value="{{ $panitialuar->cv }}" />
                                <label>{{ $panitialuar->cv }}</label><br>
                                <input class="btn btn-small btn-default" name="cv_panitialuar[{{ $i }}]" type="file" />
                            </td>
                            <td width="5%" class="text-center"><a href="#" id="{{ $i }}" class="btn btn-danger btn-sm removePanitialuar"><i class="fa fa-lg fa-times"></i></a></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td></td> <td></td> <td></td> <td></td>
                    <td><a href="#" id="addPanitialuar" class="btn btn-sm btn-success pull-right addPanitialuar"><i class="fa fa-lg fa-plus"></i> Tambah</a></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <hr>
                    
<br><p>Daftar peserta dapat diinputkan pada tabel berikut :</p>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th width="30%" class="text-center">Nama</th>
                    <th width="25%" class="text-center">NIP</th>
                    <th width="15%" class="text-center">Peran</th>
                    <th width="10%" class="text-center">Golongan</th>
                    <th width="15%" class="text-center">Jabatan</th>
                     <th width="5%" class="text-center">Option</th>
                </tr>
            </thead>
            <tbody id="peserta" class="peserta">
                @if($proposal->pesertaPos)
                    @foreach($proposal->pesertaPos as $i => $peserta)
                        <tr id="row_peserta_{{ $i }}" class="peserta-tr">
                            <td width="30%">
                                <select class="form-control nama_peserta"  name="nama_peserta[{{ $i }}]" id="nama_peserta" placeholder="Pilih Panitia" style="width: 100%">
                                    @foreach ($pegawai as $karyawan)
                                        <option value="{{ $karyawan->id_pegawai }}"
                                            @if($karyawan->id_pegawai == $peserta->id_peserta)
                                                selected
                                            @endif> 
                                            {{ $karyawan->nama }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td width="25%"><input name="nip_peserta[{{ $i }}]" class="form-control nip_peserta" value="{{$peserta->nip}}"/></td>
                            <td width="15%"><input name="peran_peserta[{{ $i }}]" class="form-control" value="{{$peserta->peran}}"/></td>
                            <td width="10%"><input name="gol_peserta[{{ $i }}]" class="form-control gol_peserta" value="{{$peserta->golongan}}"/></td>
                            <td width="15%"><input name="jab_peserta[{{ $i }}]" class="form-control jab_peserta" value="{{$peserta->jabatan}}"/></td>
                            <td width="5%" class="text-center"><a href="#" id="{{ $i }}" class="btn btn-danger btn-sm removePeserta"><i class="fa fa-lg fa-times"></i></a></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td></td> <td></td> <td></td> <td></td> <td></td>
                    <td><a href="#" id="addPeserta" class="btn btn-sm btn-success pull-right addPeserta"><i class="fa fa-lg fa-plus"></i> Tambah</a><br><br></td>
                </tr>
            </tfoot>
        </table>
    </div>             

@push('js')
<script> 
//Panitia Dalam
    //add row
    var panitiadalam_i = $('tr.panitiadalam-tr').length; 
    $('#addPanitiadlm').click(function(){
        var tr ='<tr id="row_panitiadalam_'+panitiadalam_i+'" class="dynamic-added panitiadalam-tr">'+
                '<td width="35%">'+
                    '<select class="form-control nama_panitiadlm"  name="nama_panitiadlm['+panitiadalam_i+']" id="nama_panitiadlm" placeholder="Pilih Panitia" style="width: 100%">'+
                        '@foreach ($pegawai as $pgw)'+
                            '<option value="{{ $pgw->id_pegawai }}">{{ $pgw->nama }}</option>'+
                        '@endforeach'+
                    '</select>'+
                '<td width="35%"><input name="nip_panitiadlm['+panitiadalam_i+']" class="form-control nip_panitiadlm" /></td>'+
                '<td width="25%"><input name="peran_panitiadlm['+panitiadalam_i+']" class="form-control" /></td>'+
                '<td width="5%" class="text-center"><a href="#" name="removePanitiadlm" id="'+panitiadalam_i+'" class="btn btn-danger btn-sm removePanitiadlm"><i class="fa fa-lg fa-times"></i></a></td>'+
                '</tr>'
        $('.panitia-dalam').append(tr);

        // Inisialisasi Select2
        $(".nama_panitiadlm").select2({
            width: 'resolve',
            placeholder: 'Pilih Panitia',
            allowClear: true,
            theme: "bootstrap",
        });
        $(window).resize(function() {
            $('.nama_panitiadlm').css('width', "100%");
        });
        // End Select2
        panitiadalam_i++; 
    }); 
    //end add row 

    //remove row
    $(document).on('click', '.removePanitiadlm', function(){  
           var button_id = $(this).attr("id");   
           $('#row_panitiadalam_'+button_id+'').remove();  
    });
     //end remove row 

    //select2 panitia-dalam
    $(".nama_panitiadlm").select2({
        width: 'resolve',
        placeholder: 'Pilih Panitia',
        allowClear: true,
        theme: "bootstrap",
    });
    $(window).resize(function() {
        $('.nama_panitiadlm').css('width', "100%");
    });
     //end select2 panitia-dalam

    //change panitia
     $('.panitia-dalam').delegate('.nama_panitiadlm','change',function(){
        var tr = $(this).parent().parent();
        var panitiadlm_id = tr.find('.nama_panitiadlm').val();
        console.log(panitiadlm_id);
             $.ajax({
                type:'get',
                url:'{!!URL::to('findPanitiaDalam')!!}',
                data:{'id_pegawai':panitiadlm_id},
                dataType:'json',
                success:function(data){
                    console.log("nip");
                    console.log(data.nip);

                    tr.find('.nip_panitiadlm').val(data.nip);   
              },
              error:function(){
            }
        });
    });// End Panitia Dalam
</script>

<script> 
//Peserta
    //add row
    var peserta_i = $('tr.peserta-tr').length; 
    $('#addPeserta').click(function(){ 
        var tr ='<tr id="row_peserta_'+peserta_i+'" class="dynamic-added peserta-tr">'+
                '<td width="30%">'+
                    '<select class="form-control nama_peserta"  name="nama_peserta['+peserta_i+']" id="nama_peserta" placeholder="Pilih Panitia" style="width: 100%">'+
                        '@foreach ($pegawai as $karyawan)'+
                            '<option value="{{ $karyawan->id_pegawai }}">{{ $karyawan->nama }}</option>'+
                        '@endforeach'+
                    '</select>'+
                '</td>'+
                '<td width="25%"><input name="nip_peserta['+peserta_i+']" class="form-control nip_peserta" /></td>'+
                '<td width="15%"><input name="peran_peserta['+peserta_i+']" class="form-control" /></td>'+
                '<td width="10%"><input name="gol_peserta['+peserta_i+']" class="form-control gol_peserta" /></td>'+
                '<td width="15%"><input name="jab_peserta['+peserta_i+']" class="form-control jab_peserta" /></td>'+
                '<td width="5%" class="text-center"><a href="#" name="removePeserta" id="'+peserta_i+'" class="btn btn-danger btn-sm removePeserta"><i class="fa fa-lg fa-times"></i></a></td>'+
                '</tr>'
        $('.peserta').append(tr);
         
        // Inisialisasi Select2
        $(".nama_peserta").select2({
            width: 'resolve',
            placeholder: 'Pilih Peserta',
            allowClear: true,
            theme: "bootstrap",
        });
        $(window).resize(function() {
            $('.nama_peserta').css('width', "100%");
        });
        // End Select2
        peserta_i++;
    }); 
    //end add row 

    //remove row
    $(document).on('click', '.removePeserta', function(){  
           var button_id = $(this).attr("id");   
           $('#row_peserta_'+button_id+'').remove();  
    });
     //end remove row 

    //select2 panitia-dalam
    $(".nama_peserta").select2({
        width: 'resolve',
        placeholder: 'Pilih Peserta',
        allowClear: true,
        theme: "bootstrap",
    });
    $(window).resize(function() {
        $('.nama_peserta').css('width', "100%");
    });
    //end select2 panitia-dalam

    //change panitia
     $('.peserta').delegate('.nama_peserta','change',function(){
        var tr = $(this).parent().parent();
        var peserta_id = tr.find('.nama_peserta').val();
        console.log(peserta_id);
             $.ajax({
                type:'get',
                url:'{!!URL::to('findPeserta')!!}',
                data:{'id_pegawai':peserta_id},
                dataType:'json',
                success:function(data){
                    console.log("nip");
                    console.log(data.nip);

                    tr.find('.nip_peserta').val(data.nip);   
                    tr.find('.gol_peserta').val(data.golongan);  
                    tr.find('.jab_peserta').val(data.jabatan);  
              },
              error:function(){
            }
        });
    });// End Peserta
</script>

<script> 
//Panitia-Luar
    //add row
    var panitialuar_i = $('tr.panitialuar-tr').length; 
    $('#addPanitialuar').click(function(){  
        var tr ='<tr id="row_panitialuar_'+panitialuar_i+'" class="dynamic-added panitialuar-tr">'+
                '<td width="30%"><input name="nama_panitialuar['+panitialuar_i+']" class="form-control form-control-sm" /></td>'+
                '<td width="25%"><input name="nip_panitialuar['+panitialuar_i+']" class="form-control form-control-sm" /></td>'+
                '<td width="15%"><input name="npwp_panitialuar['+panitialuar_i+']" class="form-control form-control-sm" /></td>'+
                '<td width="10%">'+
                    '<input name="cv_panitialuar_hidden[' + panitialuar_i + ']" type="hidden" value="" />'+
                    '<input type="file" name="cv_panitialuar['+panitialuar_i+']"  class="btn btn-small btn-default" >'+
                '</td>'+
                '<td width="5%" class="text-center"><a href="#" name="removePanitialuar" id="'+panitialuar_i+'" class="btn btn-danger btn-sm removePanitialuar"><i class="fa fa-lg fa-times"></i></a></td>'+
                '</tr>'
        $('.panitia-luar').append(tr);
        panitialuar_i++;
    }); 
    //End add row 

    //remove row
    $(document).on('click', '.removePanitialuar', function(){  
           var button_id = $(this).attr("id");   
           $('#row_panitialuar_'+button_id+'').remove();  
    });
     //End remove row 
    // End Panitialuar
</script>

@endpush


