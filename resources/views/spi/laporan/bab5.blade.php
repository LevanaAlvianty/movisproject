
<h5 style="text-align:center"><b>BAB 5. Penutup</b></h5><br>
<h5 style="text-align:left"><b>5.1 Kesimpulan</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">Uraikan rangkuman pelaksanaan kegiatan, luaran, hasil, indikator kinerja, dan ... kegiatan.</p>
            <textarea class="form-control mx-auto mb-2" id="kesimpulan" name="kesimpulan" rows="3">{{$laporan->kesimpulan}}</textarea>  
    </div>
</div>

<h5 style="text-align:left"><b>5.2 Rekomendasi</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">Uraikan rekomendasi dari kegiatan ini khususnya dalam hal keberlanjutan kegiatan.</p>
            <textarea class="form-control mx-auto mb-2" id="rekomendasi" name="rekomendasi" rows="3">{{$laporan->rekomendasi}}</textarea>  
    </div>
</div>
                   

@push('js')
<script>
    tinymce.init({
        selector: '#rekomendasi',
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

    tinymce.init({
        selector: '#kesimpulan',
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
