<h5 style="text-align:center"><b>KATA PENGANTAR</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan rangkuman informasi singkat tentang pelaksanaan, dan hasil 
            kegiatan yang telah dicapai, dan apresiasi terhadap semua pihak yang terlibat dalam kegiatan!
        </p>
        <textarea class="form-control mx-auto mb-2" id="katapengantar" name="katapengantar" rows="3">{{$laporan->katapengantar}}</textarea><br>

        <div class="row justify-content-end">
            <div class="col-sm-2">
                <label for="formGroupExampleInput" >Semarang, </label>
            </div>
            <div class="col-sm-4">
                <input type="date" class="form-control form-control-sm" id="tgl" name="tgltulis" placeholder="Tanggal Bulan Tahun" 
                value="{{$laporan->tgltulis}}" />
            </div>
        </div><br><br><br>
        <div class="row justify-content-end">
            <div class="col-sm-2">
                <label for="formGroupExampleInput" >Penulis</label>
            </div>
            <div class="col-sm-4">
            </div>
        </div>                      
    </div>
</div>
                

@push('js')
<script>
    tinymce.init({
        selector: '#katapengantar',
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
@endpush()
