
<h5 style="text-align:center"><b>BAB 2. Pelaksanaan Kegiatan</b></h5><br>
<h5 style="text-align:left"><b>2.1 Mekanisme Pelaksanaan Kegiatan</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan mekanisme yang dipilih untuk mencapai tujuan sesuai dengan yang tercantum
            dalam rencana strategis Polines. Apabila terjadi prubahan maka perubahan itu harus dicantumkan jenis dan alasan perubahan.
        </p>
        <textarea class="form-control mx-auto mb-2" id="mekanisme" name="mekanisme_laporan" rows="3">{{ $proposal->mekanisme_prop }}</textarea>
    </div>
</div>

<h5 style="text-align:left"><b>2.2 Pelaksanaan Kegiatan</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan tahapan, prosedur, dan rincian kegiatan untuk pelaksanaan kegiatan dalam satuan
            waktu yang telah ditentukan.<br><span style="color:red">* Minimal 5 kalimat</span>
        </p>
        <textarea class="form-control mx-auto mb-2" id="pelaksanaan" name="pelaksanaan" rows="3">{{$laporan->pelaksanaan}}</textarea><br>
        <hr>
    </div> 
</div>

<h5 style="text-align:left"><b>2.3 Pemanfaatan Sumber Daya</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">Uraikan overview untuk pembahasan pemanfaatan sumber daya.</p>
            <textarea class="form-control mx-auto mb-2" id="peran_panitia" name="peran_panitia" rows="3">{{$laporan->peran_panitia}}
            </textarea><br>
        
        <p>Adapun susunan panitia yang terlibat dalam kegiatan ini adalah sebagai berikut : </p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th width="35%" class="text-center">Nama</th>
                        <th width="35%" class="text-center">NIP</th>
                        <th width="25%" class="text-center">Peran</th>
                    </tr>
                </thead>
                <tbody id="panitia-dalam-laporan" class="panitia-dalam-laporan">
                    @if($proposal->panitiadalampos)
                        @foreach ($proposal->panitiadalampos as $panitiadalam)
                            <tr>
                                <td width="35%">{{$panitiadalam->pegawai->nama}}</td>
                                <td width="35%" class="text-center">{{$panitiadalam->nip}}</td>
                                <td width="25%" class="text-center">{{$panitiadalam->peran}}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <hr>

        <p style="text-align:justify">Jelaskan tugas masing-masing panitia :</p>
            <textarea class="form-control mx-auto mb-2" id="overview_sumberdaya" name="overview_sumberdaya" rows="3">{{$laporan->overview_sumberdaya}}
            </textarea><br><hr>

        @php
            $panitialuarpoCount = 0;
            if ($proposal->panitialuarpos) {
                foreach ($proposal->panitialuarpos as $panitialuar) {
                    if (
                        empty($panitialuar->nama) &&
                        empty($panitialuar->nip) &&
                        empty($panitialuar->npwp) &&
                        empty($panitialuar->cv)
                    ) {
                        continue;
                    }

                    $panitialuarpoCount++;
                }
            }
        @endphp 

        @if ($panitialuarpoCount > 0)
        <p>Adapun susunan panitia dari luar Polines yang terlibat dalam kegiatan ini adalah sebagai berikut : </p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th width="30%" class="text-center align-middle">Nama</th>
                        <th width="25%" class="text-center align-middle">NIP</th>
                        <th width="15%" class="text-center align-middle">NPWP</th>
                        <th width="10%" class="text-center align-middle">Curriculum Vitae</th>
                    </tr>
                </thead>
                <tbody>
                    @if($proposal->panitialuarpos)
                        @foreach($proposal->panitialuarpos as $panitialuar)
                            <tr>
                                <td width="30%">{{$panitialuar->nama}}</td>
                                <td width="25%" class="text-center">{{$panitialuar->nip}}</td>
                                <td width="15%" class="text-center">{{$panitialuar->npwp}}</td>
                                @if($panitialuar->cv)
                                    <td width="10%" class="text-center">Terlampir</td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        @endif
        <hr>

        <label>Uraikan overview untuk data peserta </label>
        <textarea class="form-control mx-auto mb-2" id="overview_peserta" name="overview_peserta" rows="3">{{$laporan->overview_peserta}}</textarea>
        <br>
            <p>* Tambahkan daftar peserta pada tabel dibawah ini (<b>jika ada</b>) :</p>
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
                    <tbody id="peserta_laporan" class="peserta_laporan">
                        @if($proposal->pesertaPos)
                            @foreach($proposal->pesertaPos as $i => $peserta)
                            <tr id="row_peserta_laporan_{{ $i }}" class="pesertalaporan-tr">
                                <td width="30%">
                                    <select class="form-control nama_peserta_laporan"  name="nama_peserta[{{ $i }}]" id="nama_peserta_laporan" placeholder="Pilih Panitia" style="width: 100%">
                                        @foreach ($pegawai as $karyawan)
                                            <option value="{{ $karyawan->id_pegawai }}"
                                                @if($karyawan->id_pegawai == $peserta->id_peserta)
                                                    selected
                                                @endif> 
                                                {{ $karyawan->nama }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td width="25%"><input name="nip_peserta[{{ $i }}]" class="form-control nip_peserta_laporan" value="{{$peserta->nip}}"/></td>
                                <td width="15%"><input name="peran_peserta[{{ $i }}]" class="form-control" value="{{$peserta->peran}}"/></td>
                                <td width="10%"><input name="gol_peserta[{{ $i }}]" class="form-control gol_peserta_laporan" value="{{$peserta->golongan}}"/></td>
                                <td width="15%"><input name="jab_peserta[{{ $i }}]" class="form-control jab_peserta_laporan" value="{{$peserta->jabatan}}"/></td>
                                <td width="5%" class="text-center"><a href="#" id="{{ $i }}" class="btn btn-danger btn-sm removePesertaLaporan"><i class="fa fa-lg fa-times"></i></a></td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td> <td></td> <td></td> <td></td> <td></td>
                            <td><a href="#" id="addPesertaLaporan" class="btn btn-sm btn-success pull-right addPesertaLaporan"><i class="fa fa-lg fa-plus"></i> Tambah</a><br><br></td>
                        </tr>
                    </tfoot>
                </table>
            </div><br>  

        <p><b>* Apabila daftar peserta yang riil mengikuti kegiatan berbeda dengan rencana, maka uraikan alasannya : </b></p>

        <textarea class="form-control mx-auto mb-2" id="alasanpeserta" name="alasan_peserta" rows="3">{{$laporan->alasan_peserta}}</textarea><br>

        <h5 style="text-align:left"><b>Rincian Biaya</b></h5>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center" >No.</th>
                        <th class="text-center" >Uraian</th>
                        <th class="text-center" >Volume</th>
                        <th class="text-center" colspan="2">Biaya Satuan</th>
                        <th class="text-center" colspan="2">Biaya Satuan</th>
                    </tr>
                </thead>
                <tbody class="anggaran_laporan">
                    @if($proposal->anggaranpos)
                        @foreach($proposal->anggaranpos as $anggaran)
                            <tr>
                                <td  width="7%" class="text-center" >{{ $loop->iteration }}</td>
                                <td  width="34%">{{$anggaran->standartbiaya->namabarang}}</td>
                                <td  width="25%" class="text-center">
                                    {{$anggaran->jml1}} 
                                    {{$anggaran->standartbiaya->satuan->satuan}} x 
                                    {{$anggaran->jml2}} x 
                                    {{$anggaran->jml3}}
                                </td>
                                <td class="text-center" width="5%" >Rp</td>
                                <td width="12%"class="text-right">{{$anggaran->harga}}</td>
                                <td class="text-center" width="5%" >Rp</td>
                                <td width="12%" class="text-right" >{{$anggaran->total}}</td> 
                            </tr>  
                        @endforeach
                        <tr>
                            <td colspan="5"></td>
                            <td style="text-align:center;">Rp</td>
                            <td style="text-align:right;">{{ $proposal->getAnggaranTotal() }}</td>
                        </tr>
                    @endif 
                </tbody>
            </table>
        </div> 
    </div>
</div>             

                   
@push('js')
<script>
    tinymce.init({
        selector: '#mekanisme',
        // forced_root_block : "",
        toolbar: 'undo redo | fontselect | fontsizeselect | bold italic underline forecolor backcolor| alignleft aligncenter alignright alignjustify | formatselect | bullist numlist outdent indent',
        menubar : false,
        plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tiny.cloud/css/codepen.min.css'
        ],
        height: 400,
    });

    // tinymce.init({
    //     selector: '#pelaksanaan',
    //     // forced_root_block : "",
    //     toolbar: 'undo redo | fontselect | fontsizeselect | bold italic underline forecolor backcolor| alignleft aligncenter alignright alignjustify | formatselect | bullist numlist outdent indent',
    //     menubar : false,
    //     plugins: [
    //     'advlist autolink lists link image charmap print preview anchor textcolor',
    //     'searchreplace visualblocks code fullscreen',
    //     'insertdatetime media table paste code help wordcount'
    //     ],
    //     content_css: [
    //         '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    //         '//www.tiny.cloud/css/codepen.min.css'
    //     ],
    //     height: 700,
    // });

    tinymce.init({
        selector: '#overview_peserta',
        // forced_root_block : "",
        toolbar: 'undo redo | fontselect | fontsizeselect | bold italic underline forecolor backcolor| alignleft aligncenter alignright alignjustify | formatselect | bullist numlist outdent indent',
        menubar : false,
        plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tiny.cloud/css/codepen.min.css'
        ],
        height: 200,
    });

    tinymce.init({
        selector: "#alasanpeserta",
        // forced_root_block : "",
        toolbar: "undo redo | fontselect | fontsizeselect | bold italic underline forecolor backcolor| alignleft aligncenter alignright alignjustify | formatselect | bullist numlist outdent indent",
        menubar : false,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor textcolor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste code help wordcount"
        ],
        content_css: [
            "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
            "//www.tiny.cloud/css/codepen.min.css"
        ],
        height: 200,
    });

    tinymce.init({
        selector: '#overview_sumberdaya',
        // forced_root_block : "",
        toolbar: 'undo redo | fontselect | fontsizeselect | bold italic underline forecolor backcolor| alignleft aligncenter alignright alignjustify | formatselect | bullist numlist outdent indent',
        menubar : false,
        plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tiny.cloud/css/codepen.min.css'
        ],
        height: 200,
    });

    tinymce.init({
        selector: '#peran_panitia',
        // forced_root_block : "",
        toolbar: 'undo redo | fontselect | fontsizeselect | bold italic underline forecolor backcolor| alignleft aligncenter alignright alignjustify | formatselect | bullist numlist outdent indent',
        menubar : false,
        plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tiny.cloud/css/codepen.min.css'
        ],
        height: 400,
    });
</script>

<script> 
//Peserta
    //add row
    var peserta_laporan_i = $('tr.pesertalaporan-tr').length; 
    $('#addPesertaLaporan').click(function(){ 
        var tr ='<tr id="row_peserta_laporan_'+peserta_laporan_i+'" class="dynamic-added pesertalaporan-tr">'+
                '<td width="30%">'+
                    '<select class="form-control nama_peserta_laporan"  name="nama_peserta['+peserta_laporan_i+']" id="nama_peserta_laporan" placeholder="Pilih Panitia" style="width: 100%">'+
                        '@foreach ($pegawai as $karyawan)'+
                            '<option value="{{ $karyawan->id_pegawai }}">{{ $karyawan->nama }}</option>'+
                        '@endforeach'+
                    '</select>'+
                '</td>'+
                '<td width="25%"><input name="nip_peserta['+peserta_laporan_i+']" class="form-control nip_peserta_laporan" /></td>'+
                '<td width="15%"><input name="peran_peserta['+peserta_laporan_i+']" class="form-control" /></td>'+
                '<td width="10%"><input name="gol_peserta['+peserta_laporan_i+']" class="form-control gol_peserta_laporan" /></td>'+
                '<td width="15%"><input name="jab_peserta['+peserta_laporan_i+']" class="form-control jab_peserta_laporan" /></td>'+
                '<td width="5%" class="text-center"><a href="#" name="removePesertaLaporan" id="'+peserta_laporan_i+'" class="btn btn-danger btn-sm removePesertaLaporan"><i class="fa fa-lg fa-times"></i></a></td>'+
                '</tr>'
        $('.peserta_laporan').append(tr);
         
        // Inisialisasi Select2
        $(".nama_peserta_laporan").select2({
            width: 'resolve',
            placeholder: 'Pilih Peserta',
            allowClear: true,
            theme: "bootstrap",
        });
        $(window).resize(function() {
            $('.nama_peserta_laporan').css('width', "100%");
        });
        // End Select2
        peserta_laporan_i++;
    }); 
    //end add row 

    //remove row
    $(document).on('click', '.removePesertaLaporan', function(){  
           var button_id = $(this).attr("id");   
           $('#row_peserta_laporan_'+button_id+'').remove();  
    });
     //end remove row 

    //select2 panitia-dalam
    $(".nama_peserta_laporan").select2({
        width: 'resolve',
        placeholder: 'Pilih Peserta',
        allowClear: true,
        theme: "bootstrap",
    });
    $(window).resize(function() {
        $('.nama_peserta_laporan').css('width', "100%");
    });
    //end select2 panitia-dalam

    //change panitia
     $('.peserta_laporan').delegate('.nama_peserta_laporan','change',function(){
        var tr = $(this).parent().parent();
        var peserta_laporan_id = tr.find('.nama_peserta_laporan').val();
        console.log(peserta_laporan_id);
             $.ajax({
                type:'get',
                url:'{!!URL::to('findPeserta')!!}',
                data:{'id_pegawai':peserta_laporan_id},
                dataType:'json',
                success:function(data){
                    console.log("nip");
                    console.log(data.nip);

                    tr.find('.nip_peserta_laporan').val(data.nip);   
                    tr.find('.gol_peserta_laporan').val(data.golongan);  
                    tr.find('.jab_peserta_laporan').val(data.jabatan);  
              },
              error:function(){
            }
        });
    });// End Peserta
</script>

<script>
    var editor_config = {
        images_upload_url: '{{url("/tinymce/upload")}}',
        selector: "#pelaksanaan",
        height: 600,
        menubar : false,
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        content_css: [
            "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
            "//www.tiny.cloud/css/codepen.min.css"
        ],
        toolbar: "undo redo | fontselect | fontsizeselect | bold italic underline forecolor backcolor| alignleft aligncenter alignright alignjustify | formatselect | bullist numlist outdent indent | image",
        // relative_urls: false,
        convert_urls: false,
        remove_script_host : false,
        force_br_newlines : true,
        force_p_newlines : false,
        forced_root_block : "",
    };
    tinymce.init(editor_config);
</script>     
@endpush()
