@push('css')
<style>

    .textarea-none-resize{
        width: 200px;
        height: 210px;
        resize: none;
    }
</style>
@endpush()

<table class="responsive">
    <table class="table">
        <tbody>
            <tr>
                <!-- Dokumen Kata Pengantar -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:center"><b>KATA PENGANTAR</b></h5><br>
                        <div class="col-sm-12">
                            <p>{!!$laporan->katapengantar!!}</p>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-5">
                                <label for="formGroupExampleInput" >Semarang, {{ Carbon\Carbon::parse($laporan->proposal->tgltulis)->formatLocalized('%d %B %Y')}}</label>
                            </div>
                        </div><br><br><br>
                        <div class="row justify-content-end">
                            <div class="col-sm-1">
                                <label for="formGroupExampleInput" >Penulis</label>
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div> 

                    </div>
                </td>
                <!-- End Dokumen Kata Pengantar -->

                <!-- Komentar Kata Pengantar -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Komentar Kata Pengantar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea name="r_katapengantar" id="r_katapengantar" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{$reviewlaporanpo->r_katapengantar}}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Kata Pengantar -->
            </tr>
        </tbody>
    </table>
</table>            

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
        readonly : 1,
    });
</script>
@endpush()
