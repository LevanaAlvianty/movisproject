<h5 style="text-align:left"><b>C. Mekanisme Kegiatan</b></h5><br>
<div class="form-group">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">Uraikan secara spesifik <b><i>tahapan pelaksanaan kegiatan</i></b> yang akan dilakukan.
        Ikuti dengan penjelasan kebutuhan sumberdaya yang diperlukan agar tujuan kegiatan dapat tercapai.</p>
        <textarea class="form-control mx-auto mekanismeprop" id="mekanismeprop" name="mekanisme_prop" rows="3" placeholder="">
            {{ $proposal->mekanisme_prop }}
        </textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3">Minimal 5 kalimat</label>
        </div>
    </div>
</div>

@push('js')
<script>
    tinymce.init({
        selector: '#mekanismeprop',
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
@endpush()