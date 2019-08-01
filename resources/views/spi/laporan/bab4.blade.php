
<h5 style="text-align:center"><b>BAB 4. Permasalahan Yang Dihadapi Dan Pencapaiannya</b></h5><br>
<h5 style="text-align:left"><b>4.1 Permasalahan Yang Dihadapi</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan semua permasalahan dan atau kendala yang dialami dalam
            pelaksanaan kegiatan, terutama penyebab terjadinya perbedaan antara pelaksanaan dengan rencana kegiatan.
        </p>
        <textarea class="form-control mx-auto mb-2" id="permasalahan" rows="3" placeholder="" value=""></textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3">Minimal 5 kalimat</label>
        </div>
    </div>
</div>

<h5 style="text-align:left"><b>4.2 Pemecahan Yang Dilakukan</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan tindakan yang telah diambil untuk mengatasi permasalahan dan atau kendala
            yang timbul dari setiap kegiatan dinyatakan dengan rinci, termasuk arahan dan kebijakan pimpinan perguruan tinggi untuk mengatasi
            permasalahan dan atau kendala tersebut.</p>
        <textarea class="form-control mx-auto mb-2" id="pemecahan" rows="3" placeholder="" value=""></textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3">Minimal 5 kalimat</label>
        </div>
    </div>
</div>
                    

@push('js')
<script>
    tinymce.init({
        selector: '#permasalahan',
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
        selector: '#pemecahan',
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

