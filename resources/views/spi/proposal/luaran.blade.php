<h5 style="text-align:left"><b>E. Luaran</b></h5><br>
<div class="form-group">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">Tuliskan luaran yang diharapkan dalam kegiatan sesuai dengan tujuan. Luaran yang dimaksud adalah <i><b>
        hasil kinerja langsung pelaksanaan kegiatan</b></i> yang bersifat terukur, spesifik, reliable.</p>
        <textarea class="form-control mx-auto mb-2 luaranprop" id="luaranprop" name="luaran_prop" rows="3" placeholder="">
            {{ $proposal->luaran_prop }}
        </textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3"></label>
        </div>
    </div>
</div>

@push('js')
<script>
    tinymce.init({
        selector: '#luaranprop',
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