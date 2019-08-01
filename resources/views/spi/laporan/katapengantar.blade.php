<h5 style="text-align:center"><b>KATA PENGANTAR</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan rangkuman informasi singkat tentang pelaksanaan, dan hasil 
            kegiatan yang telah dicapai, dan apresiasi terhadap semua pihak yang terlibat dalam kegiatan!
        </p>
        <textarea class="form-control mx-auto mb-2" id="katapengantar" rows="3" placeholder="" value=""></textarea>                  
    </div>
</div>
                

@push('js')
<script>
    tinymce.init({
        selector: '#katapengantar',
        // forced_root_block : "",
        toolbar: 'undo redo | fontselect | fontsizeselect | bold italic underline forecolor backcolor| alignleft aligncenter alignright alignjustify | formatselect image | bullist numlist outdent indent',
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
        image_advtab: true,
        height: 400,
    });
</script>
@endpush()
