<h5 style="text-align:left"><b>A. Latar Belakang</b></h5><br>

<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">Uraikan gejala atau praduga timbulnya masalah, dan rumusan masalah yang ingin diselesaikan dengan mengacu 
        kepada evaluasi diri (existing), perbandingan capaian output tahun sebelumnya, serta pengamatan, 
        analisis dari unit pelaksana kegiatan!</p>
        <textarea class="form-control mx-auto mb-2 latarprop" id="latarprop1" name="latarbelakang1" rows="3" placeholder="">
            {{ $proposal->latarbelakang1 }}
        </textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3">Minimal 5 kalimat</label>
        </div>
    </div>
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">Uraikan penjelasan atau rasionalisasi yang menghubungkan antara permasalahan dengan tujuan!</p>
        <textarea class="form-control mx-auto latarprop" id="latarprop2" rows="3"  name="latarbelakang2" placeholder="">
            {{ $proposal->latarbelakang2 }}
        </textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3">Minimal 5 kalimat</label>
        </div>
    </div>
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">Uraikan kegiatan sesuai dengan rencana pengembangan Polines yang tertuang dalam rencana strategis, 
        atau turunanya berupa rencana pengembangan jurusan atau pusat atau bagian atau unit pelaksana!</p>
        <textarea class="form-control mx-auto latarprop" id="latarprop3" rows="3"  name="latarbelakang3" placeholder="">
          {{ $proposal->latarbelakang3 }}
        </textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3">Minimal 5 kalimat</label>
        </div>
    </div>
</div>
  

@push('js')
<script>
    tinymce.init({
        selector: '#latarprop1',
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

    tinymce.init({
        selector: '#latarprop2',
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

    tinymce.init({
        selector: '#latarprop3',
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
