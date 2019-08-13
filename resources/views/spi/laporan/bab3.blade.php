
<h5 style="text-align:center"><b>BAB 3. Luaran Yang Dicapai</b></h5><br>
<h5 style="text-align:left"><b>3.1 Luaran Kegiatan (Output)</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan luaran kegiatan yang dilaksanakan dengan dukungan fasilitas peralatan
            dan sumberdaya lainnya yang diperoleh. <br><span style="color:red">* Minimal 5 kalimat</span>
        </p>

        <textarea class="form-control mx-auto mb-2" id="luaran_kegiatan" name="luaran_kegiatan" rows="3">
            {{$laporan->luaran_kegiatan}}
        </textarea>
    </div>
</div>

<h5 style="text-align:left"><b>3.2 Indikator Kerja</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan indikator kinerja kegiatan yang mengacu pada indikator kinerja pada <b>Renstra Polines</b> 
            yang disusun dalam bentuk tabel, diisi,dengan keadaan awal (<b>baseline</b>), target yang hendak dicapai serta 
            capaian dari hasil kegiatan. <br><span style="color:red">* Minimal 5 kalimat</span>
        </p>
        <textarea class="form-control mx-auto mb-2" id="overview_indikator" name="overview_indikator" rows="3">
            {{$laporan->overview_indikator}}
        </textarea><br>

        <label>Isikan indikator kinerja pada tabel di bawah ini :</label>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th width="35%" class="text-center">Indikator</th>
                        <th width="30%" class="text-center">Base Line</th>
                        <th width="30%" class="text-center">Target</th>
                        <th width="5%" class="text-center">Aksi</th>
                        
                    </tr>
                </thead>
                <tbody id="indikator" class="indikator">
                @if($laporan->indikatorpos)
                    @foreach($laporan->indikatorpos as $i => $indikator)
                        <tr id="row_indikator_{{ $i }}" class="indikator-tr">
                            <td width="35%"><input type="text" name="indikator[{{ $i }}]" class="form-control form-control-sm" value="{{$indikator->indikator}}" /></td>
                            <td width="30%"><input type="text" name="baseline[{{ $i }}]" class="form-control form-control-sm" value="{{$indikator->baseline}}" /></td>
                            <td width="30%"><input type="text" name="target[{{ $i }}]" class="form-control form-control-sm" value="{{$indikator->target}}" /></td>
                            <td width="5%" class="text-center"><a href="#" id="{{ $i }}" class="btn btn-danger btn-sm removeIndikator"><i class="fa fa-lg fa-times"></i></a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td></td> <td></td> <td></td>
                        <td>
                            <a href="#" id="addIndikator" class="btn btn-sm btn-success pull-right addIndikator"><i class="fa fa-lg fa-plus"></i> Tambah</a></td>
                        </td>
                    </tr>
                </tfoot>
            </table><br>
        </div> 

            <p>Uraikan rincian untuk indikator kerja kegiatan : </p>
            <textarea class="form-control mx-auto mb-2" id="rincian_indikator1" name="rincian_indikator1" rows="3">
                {!! $laporan->rincian_indikator1 !!}
            </textarea>
            <br>
    </div>
</div>
                   

@push('js')
<script>
    tinymce.init({
        selector: "#luaran_kegiatan",
        toolbar: "undo redo | fontselect | fontsizeselect | bold italic underline forecolor backcolor| alignleft aligncenter alignright alignjustify | formatselect | bullist numlist outdent indent",
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
        height: 300,
    });

    tinymce.init({
        selector: "#overview_indikator",
        toolbar: "undo redo | fontselect | fontsizeselect | bold italic underline forecolor backcolor| alignleft aligncenter alignright alignjustify | formatselect | bullist numlist outdent indent",
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
        height: 400,
    });  
</script>


<script>
  //-----------------------------------add row------------------------------------------ 
  var indikator_i = $('tr.indikator-tr').length;  
    $('#addIndikator').click(function(){
        var tr = '<tr id="row_indikator_'+indikator_i+'" class="indikator-tr">'+
                    '<td width="35%"><input type="text" name="indikator['+indikator_i+']" class="form-control form-control-sm" /></td>'+
                    '<td width="30%"><input type="text" name="baseline['+indikator_i+']" class="form-control form-control-sm" /></td>'+
                    '<td width="30%"><input type="text" name="target['+indikator_i+']" class="form-control form-control-sm" /></td>'+
                    '<td width="5%" class="text-center"><a href="#" id="'+indikator_i+'" class="btn btn-danger btn-sm removeIndikator"><i class="fa fa-lg fa-times"></i></a></td>'+
                '</tr>';
        $('.indikator').append(tr); 
        indikator_i++;
    });  

    //------------------------------remove row-----------------------------------
    $(document).on('click', '.removeIndikator', function(){  
           var button_id = $(this).attr("id");   
           $('#row_indikator_'+button_id+'').remove();  
    });


</script>


<script>
    var editor_config = {
        images_upload_url: '{{url("/tinymce/upload")}}',
        selector: "#rincian_indikator1",
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
    };
tinymce.init(editor_config);
</script>     
@endpush()
