
<h5 style="text-align:center"><b>BAB 2. Pelaksanaan Kegiatan</b></h5><br>
<h5 style="text-align:left"><b>2.1 Mekanisme Pelaksanaan Kegiatan</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan mekanisme yang dipilih untuk mencapai tujuan sesuai denganyang tercantum
            dalam rencana strategis Polines. Apabila terjadi prubahan maka perubahan itu harus dicantumkan jenis dan alasan perubahan.
        </p>
        <textarea class="form-control mx-auto mb-2" id="mekanisme" rows="3" placeholder="" value=""></textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3">Minimal 5 kalimat</label>
        </div>
    </div>
</div>

<h5 style="text-align:left"><b>2.2 Pelaksanaan Kegiatan</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">
            Uraikan tahapan, prosedur, dan rincian kegiatan untuk pelaksanaan kegiatan dalam satuan
            waktu yang telah ditentukan.
        </p>
        <textarea class="form-control mx-auto mb-2" id="pelaksanaan" rows="3" placeholder="" value=""></textarea>
        <div class="row justify-content-end">
            <label for="formGroupExampleInput" class="col-sm-3">Minimal 5 kalimat</label>
        </div>

        <br><p>Daftar peserta yang riil mengikuti kegiatan, apabila berbeda dengan rencana maka uraikan alasannya :</p>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th width="" class="text-center">Nama</th>
                        <th width="" class="text-center">NIP</th>
                        <th width="" class="text-center">Peran</th>
                        <th width="" class="text-center">Golongan</th>
                        <th width="" class="text-center">Jabatan</th>
                        <th width="" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="pesertalist">
                    <tr>
                        <td width="30%"><input name="nama_input[0]" class="form-control form-control-sm" /></td>
                        <td width="25%"><input name="nip_input[0]" class="form-control form-control-sm" /></td>
                        <td width="15%"><input name="peran_input[0]" class="form-control form-control-sm" /></td>
                        <td width="10%"><input name="gol_input[0]" class="form-control form-control-sm" /></td>
                        <td width="15%"><input name="jab_input[0]" class="form-control form-control-sm" /></td>
                        <td width="5%"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td> <td></td> <td></td> <td></td> <td></td>
                        <td>
                            <button class="btn btn-small btn-success" onclick="add(); return false"><i class="glyphicon glyphicon-plus">+</i></button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div> 
</div>

<h5 style="text-align:left"><b>2.3 Pemanfaatan Sumber Daya</b></h5><br>
<div class="form-group row">
    <div class="col-sm-12 mb-4">
        <p style="text-align:justify">Uraikan overview untuk pembahasan pemanfaatan sumber daya.</p>
            <textarea class="form-control mx-auto mb-2" id="over_sumberdaya" rows="3" placeholder="" value=""></textarea>
        
        <p style="text-align:justify">
            Uraikan tahapan, prosedur, dan rincian kegiatan untuk pelaksanaan kegiatan dalam satuan
            waktu yang telah ditentukan.
        </p>

        <p>Adapun susunan panitia yang terlibat dalam kegiatan ini adalah sebagai berikut : </p>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th width="" class="text-center">Nama</th>
                            <th width="" class="text-center">NIP</th>
                            <th width="" class="text-center">Peran</th>
                            <th width="" class="text-center">Aksi</th> 
                        </tr>
                    </thead>
                    <tbody id="panitia">
                        <tr>
                            <td width="40%"><input name="nama_input[0]" class="form-control form-control-sm" /></td>
                            <td width="25%"><input name="nip_input[0]" class="form-control form-control-sm" /></td>
                            <td width="25%"><input name="peran_input[0]" class="form-control form-control-sm" /></td>
                            <td width="10%"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td> <td></td> <td></td>
                            <td>
                                <button class="btn btn-sm btn-success" onclick="add(); return false"><i class="fa fa-lg fa-plus"></i></button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        <br><p>Apabila ada pelibatan dengan personil dari luar Polines, maka <b>wajib</b> mencantumkan datanya pada tabel berikut :</p>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th width="" class="text-center">Nama</th>
                        <th width="" class="text-center">NIP</th>
                        <th width="" class="text-center">NPWP</th>
                        <th width="" class="text-center">Curriculum Vitae</th>
                        <th width="" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="personillist">
                    <tr>
                        <td width="25%"><input name="nama_input[0]" class="form-control form-control-sm" /></td>
                        <td width="25%"><input name="nip_input[0]" class="form-control form-control-sm" /></td>
                        <td width="15%"><input name="npwp_input[0]" class="form-control form-control-sm" /></td>
                        <td width="10%"><input type="file" name="cv_input[0]"  class="btn btn-small btn-default" >+</td>
                        <td width="10%"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td> <td></td> <td></td> <td></td>
                        <td>
                            <button class="btn btn-sm btn-success" onclick="add(); return false"><i class="fa fa-lg fa-plus"></i></button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div><br>
        <h5 style="text-align:left"><b>Rincian Biaya</b></h5>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th width="30%" rowspan="2" class="text-center align-middle">Uraian</th>
                        <th width="30%" colspan="3" class="text-center">Volume</th>
                        <th width="15%" rowspan="2" class="text-center align-middle">Biaya Satuan</th>
                        <th width="15%" rowspan="2" class="text-center align-middle">Biaya</th>
                        <th width="5%" rowspan="2" class="text-center align-middle"><a href="#" class="btn btn-sm btn-success addRow"><i class="glyphicon glyphicon-plus">+</i></a></th>
                    </tr>
                    <tr>
                        <th width="" class="text-center">Jumlah 1</th>
                        <th width="" class="text-center">Jumlah 2</th>
                        <th width="" class="text-center">Jumlah 3</th>
                    </tr>
                </thead>
                <tbody id="anggaran">
                    <tr>
                        <td width="" ><input id="namabarang" name="namabarang[]" class="form-control form-control-sm namabarang" /></td>
                        <td width="" ><input name="jml1[]" class="form-control form-control-sm jml1" /></td>
                        <td width="" ><input name="jml2[]" class="form-control form-control-sm jml2" /></td>
                        <td width="" ><input name="jml3[]" class="form-control form-control-sm jml3" /></td>
                        <td width="" ><input id="hrg" name="hrg[]" class="form-control form-control-sm hrg" disable="true"/></td>
                        <td width="" ><input name="total[]" class="form-control form-control-sm total" /></td>
                        <td width="5%" class="text-center"><a href="#" class="btn btn-danger btn-sm remove"><i class="glyphicon glyphicon-remove">x</i></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td style=""></td> 
                        <td style=""></td> 
                        <td style=""></td> 
                        <td></td> 
                        <td><b>Total</b></td> 
                        <td><b class="tot"></b></td> 
                        <td width="15%" class="text-center">
                            <a href="#" id="add" class="btn btn-sm btn-success addRow"><i class="fa fa-lg fa-plus"></i></a>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>             

                   
@push('js')
<script>
    tinymce.init({
        selector: '#mekanisme',
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
        selector: '#pelaksanaan',
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
        selector: '#over_sumberdaya',
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
<script>
var i = 1;
function additem() {
//menentukan target append
    var itemlist = document.getElementById('panitia');
                
//membuat element
    var row = document.createElement('tr');
    var nama = document.createElement('td');
    var nip = document.createElement('td');
    var peran = document.createElement('td');
    var aksi = document.createElement('td');
 
//meng append element
    itemlist.appendChild(row);
    row.appendChild(nama);
    row.appendChild(nip);
    row.appendChild(peran);
    row.appendChild(aksi);
 
//membuat element input
    var nama_input = document.createElement('input');
    nama_input.setAttribute('name', 'nama_input[' + i + ']');
    nama_input.setAttribute('class', 'form-control form-control-sm');

    var nip_input = document.createElement('input');
    nip_input.setAttribute('name', 'nip_input[' + i + ']');
    nip_input.setAttribute('class', 'form-control form-control-sm');

    var peran_input = document.createElement('input');
    peran_input.setAttribute('name', 'peran_input[' + i + ']');
    peran_input.setAttribute('class', 'form-control form-control-sm');
 
    var hapus = document.createElement('span');
 
//meng append element input
// no.appendChild(no_input);
    nama.appendChild(nama_input);
    nip.appendChild(nip_input);
    peran.appendChild(peran_input);
    aksi.appendChild(hapus);
 
    hapus.innerHTML = hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fa fa-lg fa-times"></i></button>';
//  membuat aksi delete element
    hapus.onclick = function () {
        row.parentNode.removeChild(row);
    };
 
    i++;
}
</script>

<script>
var i = 1;
function add() {
//menentukan target append
    var itemlist = document.getElementById('pesertalist');
                
//membuat element
    var row = document.createElement('tr');
    // var no = document.createElement('td');
    var nama = document.createElement('td');
    var nip = document.createElement('td');
    var peran = document.createElement('td');
    var gol = document.createElement('td');
    var jab = document.createElement('td');
    var aksi = document.createElement('td');
 
//meng append element
    itemlist.appendChild(row);
    row.appendChild(nama);
    row.appendChild(nip);
    row.appendChild(peran);
    row.appendChild(gol);
    row.appendChild(jab);
    row.appendChild(aksi);
 
//membuat element input
    var nama_input = document.createElement('input');
    nama_input.setAttribute('name', 'nama_input[' + i + ']');
    nama_input.setAttribute('class', 'form-control form-control-sm');

    var nip_input = document.createElement('input');
    nip_input.setAttribute('name', 'nip_input[' + i + ']');
    nip_input.setAttribute('class', 'form-control form-control-sm');

    var peran_input = document.createElement('input');
    peran_input.setAttribute('name', 'peran_input[' + i + ']');
    peran_input.setAttribute('class', 'form-control form-control-sm');

    var gol_input = document.createElement('input');
    gol_input.setAttribute('name', 'gol_input[' + i + ']');
    gol_input.setAttribute('class', 'form-control form-control-sm');

    var jab_input = document.createElement('input');
    jab_input.setAttribute('name', 'jab_input[' + i + ']');
    jab_input.setAttribute('class', 'form-control form-control-sm');
 
    var hapus = document.createElement('span');
 
//meng append element input
    nama.appendChild(nama_input);
    nip.appendChild(nip_input);
    peran.appendChild(peran_input);
    gol.appendChild(gol_input);
    jab.appendChild(jab_input);
    aksi.appendChild(hapus);
 
    hapus.innerHTML = hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fa fa-lg fa-times"></i></button>';
//  membuat aksi delete element
    hapus.onclick = function () {
        row.parentNode.removeChild(row);
    };
 
    i++;
}
</script>

<script>
var i = 1;
function addi() {
//menentukan target append
    var itemlist = document.getElementById('personillist');
                
//membuat element
    var row = document.createElement('tr');
    // var no = document.createElement('td');
    var nama = document.createElement('td');
    var nip = document.createElement('td');
    var npwp = document.createElement('td');
    var cv = document.createElement('td');
    var aksi = document.createElement('td');
 
//meng append element
    itemlist.appendChild(row);
    row.appendChild(nama);
    row.appendChild(nip);
    row.appendChild(npwp);
    row.appendChild(cv);
    row.appendChild(aksi);
 
//membuat element input
    var nama_input = document.createElement('input');
    nama_input.setAttribute('name', 'nama_input[' + i + ']');
    nama_input.setAttribute('class', 'form-control form-control-sm');

    var nip_input = document.createElement('input');
    nip_input.setAttribute('name', 'nip_input[' + i + ']');
    nip_input.setAttribute('class', 'form-control form-control-sm');

    var npwp_input = document.createElement('input');
    npwp_input.setAttribute('name', 'npwp_input[' + i + ']');
    npwp_input.setAttribute('class', 'form-control form-control-sm');

    var cv_input = document.createElement('input');
    cv_input.setAttribute('name', 'cv_input[' + i + ']');
    cv_input.setAttribute('class','btn btn-small btn-default');
    cv_input.setAttribute('type','file');
  //  cv_input.innerHTML = "Upload File";
    
    var hapus = document.createElement('span');
 
//meng append element input
    nama.appendChild(nama_input);
    nip.appendChild(nip_input);
    npwp.appendChild(npwp_input);
    cv.appendChild(cv_input);
    aksi.appendChild(hapus);
 
    hapus.innerHTML = hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fa fa-lg fa-times"></i></button>';
//  membuat aksi delete element
    hapus.onclick = function () {
        row.parentNode.removeChild(row);
    };
 
    i++;
}
</script>

{{-- anggaran --}}
<script type="text/javascript">
    $('.anggaran').delegate('.namabarang','change',function(){
        var tr = $(this).parent().parent();
        tr.find('.jml1').focus();
    });

    // 

    $('.anggaran').delegate('.jml1, .jml2, .jml3, .hrg', 'keyup',function(){
        var tr = $(this).parent().parent();
        var jml1 = tr.find('.jml1').val();
        var jml2 = tr.find('.jml2').val();
        var jml3 = tr.find('.jml3').val();
        var hrg = tr.find('.hrg').val();
        if ( jml1 == 0 && jml2 == 0 || jml1 == null && jml2 == null )
        { 
            var total = (jml3 * hrg); 
        }  
          else if ( jml1 == 0 && jml3 == 0 || jml1 == null && jml3 == null )
        { 
            var total = (jml2 * hrg);  
        }
        else if ( jml2 == 0 && jml3 == 0 || jml2 == null && jml3 == null )
        { 
            var total = (jml1 * hrg);  
        }
        else if ( jml1 == 0 || jml1 == '' )
        { 
            var total = (jml2 * jml3 * hrg); 
        }     
        else if ( jml2 == 0 || jml2 == '')
        { 
            var total = (jml1 * jml3 * hrg);  
        } 
        else if ( jml3 == 0 || jml3 == '')
        { 
            var total = (jml1 * jml2 * hrg);  
        }
        else
        {
            var total = (jml1 * jml2 * jml3 * hrg);  
        }
        tr.find('.total').val(total);
        tot();
    });

    

    //--------------------------------create function by user------------------------------------
    function tot()
    {
        var tot = 0;
        $('.total').each(function(i,e){
            var total = $(this).val() - 0;
            tot += total;
        })
        $('.tot').html("Rp " + tot.formatMoney(2,',','.')); 
    };

    //-----------------------------------format number------------------------------------------
    Number.prototype.formatMoney = function(decPlaces, thouSeparator, decSeparator){
        var n = this,
            decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces,
            decSeparator = decSeparator == undefined ? "." : decSeparator,
            thouSeparator = thouSeparator == undefined ? "," : thouSeparator,
            sign = n < 0 ? "-" : "",
            i = parseInt(n = Math.abs(+n || 0).toFixed(decPlaces)) + "",
            j = (j = i.length) > 3 ? j % 3 : 0;
        return sign + (j ? i.substr(0, j) + thouSeparator : "") 
        + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thouSeparator)
        + (decPlaces ? decSeparator + Math.abs(n - i).toFixed(decPlaces).slice(2) : "");

    };
    //------------------------------------------------------------------------------------------

    $('#add').click(function(){  
           i++; 
        var tr = '<tr id="row'+i+'" class="dynamic-added">'+
                        '<td width="" >'+
                        '<input name="namabarang[]" id="namabarang" class="form-control form-control-sm namabarang" />'+
                        '</td>'+
                        
                        '<td width="" ><input name="jml1[]" class="form-control form-control-sm jml1" /></td>'+
                        '<td width="" ><input name="jml2[]" class="form-control form-control-sm jml2" /></td>'+
                        '<td width="" ><input name="jml3[]" class="form-control form-control-sm jml3" /></td>'+
                        '<td width="" ><input name="hrg[]" class="form-control form-control-sm hrg" /></td>'+
                        '<td width="" ><input name="total[]" class="form-control form-control-sm total" /></td>'+
                        '<td width="5%" class="text-center"><a href="#" name="remove" id="'+i+'" class="btn btn-danger btn-sm remove"><i class="fa fa-lg fa-times"></i></a></td>'+
                    '</tr>';
        $('.anggaran').append(tr);
     
    });  
    //------------------------------end create function by user-----------------------------------

    // $('.remove').live('click',function(){
    //     var l= $('tbody tr').length;
    //     if (l==1)
    //     {
    //         alert('You cannot remove last one');
    //     } else{
    //         $(this).parent().parent().remove();
    //     } 
    // });

    $(document).on('click', '.remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });
</script>

<script type="text/javascript">
     
</script> 
@endpush()
