<h5 style="text-align:left"><b>D. Personil</b></h5>
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
            <tbody id="itemlist">
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
                        <button class="btn btn-sm btn-success" onclick="additem(); return false"><i class="fa fa-lg fa-plus"></i></button>
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
                    <td width="30%"><input name="nama_input[0]" class="form-control form-control-sm" /></td>
                    <td width="25%"><input name="nip_input[0]" class="form-control form-control-sm" /></td>
                    <td width="15%"><input name="npwp_input[0]" class="form-control form-control-sm" /></td>
                    <td width="10%"><input type="file" name="cv_input[0]"  class="btn btn-small btn-default" ></td>
                    <td width="5%"></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td></td> <td></td> <td></td> <td></td>
                    <td>
                        <button class="btn btn-sm btn-success" onclick="addi(); return false"><i class="fa fa-lg fa-plus"></i></button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
                        
    <br><p>Daftar peserta dapat diinputkan pada tabel berikut :</p>
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
                        <button class="btn btn-sm btn-success" onclick="add(); return false"><i class="fa fa-lg fa-plus"></i></button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>             

@push('js')
<script>
var i = 1;
function additem() {
//menentukan target append
    var itemlist = document.getElementById('itemlist');
                
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
 
    hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fa fa-lg fa-times"></i></button>';
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
 
    hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fa fa-lg fa-times"></i></button>';
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
    cv_input.setAttribute('class','btn btn-sm btn-default');
    cv_input.setAttribute('type','file');
  //  cv_input.innerHTML = "Upload File";
    
    var hapus = document.createElement('span');
 
//meng append element input
    nama.appendChild(nama_input);
    nip.appendChild(nip_input);
    npwp.appendChild(npwp_input);
    cv.appendChild(cv_input);
    aksi.appendChild(hapus);
 
    hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fa fa-lg fa-times"></i></button>';
//  membuat aksi delete element
    hapus.onclick = function () {
        row.parentNode.removeChild(row);
    };
 
    i++;
}
</script>
@endpush


