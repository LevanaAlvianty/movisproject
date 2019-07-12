<h5 style="text-align:left"><b>F. Jadwal Kegiatan</b></h5><br>
<p>Susun jadwal kegiatan sesuai dengan mekanisme kegiatan-kegiatan dalam skedul waktu per bulan secara rinci dari perencanaan sampai dengan pelaporan kegiatan.</p>
<div class="table-responsive">
    <table class="table table-striped table-hover">
         <thead class="thead-dark">
            <tr>
                <th width="59%" rowspan="2" class="text-center align-middle">Kegiatan</th>
                <th width="36%" colspan="12" class="text-center">BULAN</th>
                <th width="5%" rowspan="2" class="text-center align-middle">Aksi</th>
            </tr>
            <tr>
                <th width="3%"  class="text-center">1</th>
                <th width="3%"  class="text-center">2</th>
                <th width="3%"  class="text-center">3</th>
                <th width="3%"  class="text-center">4</th>
                <th width="3%"  class="text-center">5</th>
                <th width="3%"  class="text-center">6</th>
                <th width="3%"  class="text-center">7</th>
                <th width="3%"  class="text-center">8</th>
                <th width="3%"  class="text-center">9</th>
                <th width="3%"  class="text-center">10</th> 
                <th width="3%"  class="text-center">11</th>
                <th width="3%"  class="text-center">12</th>
            </tr>
        </thead>
        <tbody id="jadwallist">
            <tr>
                <td width="59%"><input name="nama_kegiatan[0]" class="form-control form-control-sm" /></td>
                <td width="3%"><input type="checkbox" name="januari[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="febuari[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="maret[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="april[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="mei[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="jun[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="juli[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="agustus[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="september[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="oktober[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="november[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="desember[0]" class="" /></td>
                <td width="5%"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> 
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
                <td width="5%" class="text-center">
                    <button class="btn btn-sm btn-success" onclick="addjadwal(); return false"><i class="fa fa-lg fa-plus"></i></button>
                </td> 
            </tr>
        </tfoot>
    </table>
</div>

@push('js')
<script>
var i = 1;
function addjadwal() {
//menentukan target append
    var itemlist = document.getElementById('jadwallist');
                
//membuat element
    var row = document.createElement('tr');
    var namakegiatan = document.createElement('td');
    var jan = document.createElement('td');
    var feb = document.createElement('td');
    var mar = document.createElement('td');
    var apr = document.createElement('td');
    var mei = document.createElement('td');
    var jun = document.createElement('td');
    var jul = document.createElement('td');
    var agust = document.createElement('td');
    var sept = document.createElement('td');
    var okt = document.createElement('td');
    var nov = document.createElement('td');
    var des = document.createElement('td');
    var aksi = document.createElement('td');
 
//meng append element
    itemlist.appendChild(row);
    row.appendChild(namakegiatan);
    row.appendChild(jan);
    row.appendChild(feb);
    row.appendChild(mar);
    row.appendChild(apr);
    row.appendChild(mei);
    row.appendChild(jun);
    row.appendChild(jul);
    row.appendChild(agust);
    row.appendChild(sept);
    row.appendChild(okt);
    row.appendChild(nov);
    row.appendChild(des);
    row.appendChild(aksi);
 
//membuat element input
    var nama_kegiatan = document.createElement('input');
    nama_kegiatan.setAttribute('name', 'nama_kegiatan[' + i + ']');
    nama_kegiatan.setAttribute('class', 'form-control form-control-sm');
   

    var januari = document.createElement('input');
    januari.setAttribute('name', 'januari[' + i + ']');
    januari.setAttribute('class', '');
    januari.setAttribute('type', 'checkbox');

    var februari = document.createElement('input');
    februari.setAttribute('name', 'februari[' + i + ']');
    februari.setAttribute('class', '');
    februari.setAttribute('type', 'checkbox');

    var maret = document.createElement('input');
    maret.setAttribute('name', 'maret[' + i + ']');
    maret.setAttribute('class', '');
    maret.setAttribute('type', 'checkbox');

    var april = document.createElement('input');
    april.setAttribute('name', 'april[' + i + ']');
    april.setAttribute('class', '');
    april.setAttribute('type', 'checkbox');
   
    var mei1 = document.createElement('input');
    mei1.setAttribute('name', 'mei1[' + i + ']');
    mei1.setAttribute('class', '');
    mei1.setAttribute('type', 'checkbox');

    var juni = document.createElement('input');
    juni.setAttribute('name', 'juni[' + i + ']');
    juni.setAttribute('class', '');
    juni.setAttribute('type', 'checkbox');

    var juli = document.createElement('input');
    juli.setAttribute('name', 'juli[' + i + ']');
    juli.setAttribute('class', '');
    juli.setAttribute('type', 'checkbox');

    var agustus = document.createElement('input');
    agustus.setAttribute('name', 'agustus[' + i + ']');
    agustus.setAttribute('class', '');
    agustus.setAttribute('type', 'checkbox');

    var september = document.createElement('input');
    september.setAttribute('name', 'september[' + i + ']');
    september.setAttribute('class', '');
    september.setAttribute('type', 'checkbox');

    var oktober = document.createElement('input');
    oktober.setAttribute('name', 'oktober[' + i + ']');
    oktober.setAttribute('class', '');
    oktober.setAttribute('type', 'checkbox');

    var november = document.createElement('input');
    november.setAttribute('name', 'november[' + i + ']');
    november.setAttribute('class', '');
    november.setAttribute('type', 'checkbox');

    var desember = document.createElement('input');
    desember.setAttribute('name', 'desember[' + i + ']');
    desember.setAttribute('class', '');
    desember.setAttribute('type', 'checkbox');
    
    var hapus = document.createElement('span');
 
//meng append element input
// no.appendChild(no_input);
    namakegiatan.appendChild(nama_kegiatan);
    jan.appendChild(januari);
    feb.appendChild(februari);
    mar.appendChild(maret);
    apr.appendChild(april);
    mei.appendChild(mei1);
    jun.appendChild(juni);
    jul.appendChild(juli);
    agust.appendChild(agustus);
    sept.appendChild(september);
    okt.appendChild(oktober);
    nov.appendChild(november);
    des.appendChild(desember);
    aksi.appendChild(hapus);
 
    hapus.innerHTML = '<button class="btn btn-sm btn-danger btn-center"><i class="fa fa-lg fa-times"></i></button>';
//  membuat aksi delete element
    hapus.onclick = function () {
        row.parentNode.removeChild(row);
    };
 
    i++;
}
</script>
@endpush

