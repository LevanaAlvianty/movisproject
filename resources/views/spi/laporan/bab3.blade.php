
<h5 style="text-align:center"><b>BAB 3. Luaran Yang Dicapai</b></h5><br>
<h5 style="text-align:left"><b>3.1 Luaran Kegiatan (Output)</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan luaran kegiatan yang dilaksanakan dengan dukungan fasilitas peralatan
            dan sumberdaya lainnya yang diperoleh.
        </p>
        <textarea class="form-control mx-auto mb-2" id="luarankegiatan" rows="3" placeholder="" value=""></textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3">Minimal 5 kalimat</label>
        </div>
    </div>
</div>

<h5 style="text-align:left"><b>3.2 Indikator Kerja</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan indikator kinerja kegiatan yang mengacu pada indikator kinerja pada <b>Renstra Polines</b> 
            yang disusun dalam bentuk tabel, diisi,dengan keadaan awal (<b>baseline</b>), target yang hendak dicapai serta 
            capaian dari hasil kegiatan.
        </p>
        <textarea class="form-control mx-auto mb-2" id="over_indikator" rows="3" placeholder="" value=""></textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3">Minimal 5 kalimat</label>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th width="" class="text-center">No</th>
                        <th width="" class="text-center">Indikator</th>
                        <th width="" class="text-center">Base Line</th>
                        <th width="" class="text-center">Target</th>
                        <th width="" class="text-center">Aksi</th>
                        
                    </tr>
                </thead>
                <tbody id="indikator">
                    <tr>
                        <td width="10%"><input name="no_input[0]" class="form-control form-control-sm" /></td>
                        <td width="40%"><input name="indikator_input[0]" class="form-control form-control-sm" /></td>
                        <td width="20%"><input name="baseline_input[0]" class="form-control form-control-sm" /></td>
                        <td width="20%"><input name="target_input[0]" class="form-control form-control-sm" /></td>
                        <td width="10%"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td> <td></td> <td></td><td></td><td></td>
                        <td>
                            <button class="btn btn-sm btn-success" onclick="add(); return false"><i class="fa fa-lg fa-plus"></i></button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
                   

@push('js')
<script>
    tinymce.init({
        selector: '#luarankegiatan',
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
        height: 300,
    });

    tinymce.init({
        selector: '#over_indikator',
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
        height: 300,
    });
</script>

<script>
        var i = 1;
        function additem() {
        //menentukan target append
            var itemlist = document.getElementById('indikator');
                        
        //membuat element
            var row = document.createElement('tr');
            var no = document.createElement('td');
            var indikator = document.createElement('td');
            var baseline = document.createElement('td');
            var target = document.createElement('td');
            var aksi = document.createElement('td');
         
        //meng append element
            itemlist.appendChild(row);
            row.appendChild(no)
            row.appendChild(indikator);
            row.appendChild(baseline);
            row.appendChild(target);
            row.appendChild(aksi);
         
        //membuat element input
            var no_input = document.createElement('input');
            no_input.setAttribute('name', 'nama_input[' + i + ']');
            no_input.setAttribute('class', 'form-control form-control-sm');
        
            var indikator_input = document.createElement('input');
            indikator_input.setAttribute('name', 'nip_input[' + i + ']');
            indikator_input.setAttribute('class', 'form-control form-control-sm');
        
            var baseline_input = document.createElement('input');
            baseline_input.setAttribute('name', 'peran_input[' + i + ']');
            baseline_input.setAttribute('class', 'form-control form-control-sm');
         
            var target_input = document.createElement('input');
            target_input.setAttribute('name', 'peran_input[' + i + ']');
            target_input.setAttribute('class', 'form-control form-control-sm');

            var hapus = document.createElement('span');
         
        //meng append element input
        // no.appendChild(no_input);
            nama.appendChild(no_input);
            nip.appendChild(indikator_input);
            peran.appendChild(baseline_input);
            peran.appendChild(target_input);
            aksi.appendChild(hapus);
         
            hapus.innerHTML = hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fa fa-lg fa-times"></i></button>';
        //  membuat aksi delete element
            hapus.onclick = function () {
                row.parentNode.removeChild(row);
            };
         
            i++;
        }
        </script>
        
@endpush()
