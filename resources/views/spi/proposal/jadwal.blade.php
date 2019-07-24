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
        <tbody id="jadwalpo" class="jadwalpo">
            <tr id="row0" class="dynamic-added">
                <td width="59%"><input name="nama_kegiatan[0]" class="form-control form-control-sm" /></td>
                <td width="3%"><input type="checkbox" name="januari[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="februari[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="maret[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="april[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="mei[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="juni[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="juli[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="agustus[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="september[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="oktober[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="november[0]" class="" /></td>
                <td width="3%"><input type="checkbox" name="desember[0]" class="" /></td>
                <td width="5%" class="text-center"><a href="#" id="0" class="btn btn-danger btn-sm removeJadwal"><i class="fa fa-lg fa-times"></i></a></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> 
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
                <td width="5%" class="text-center"><a href="#" id="addJadwal" class="btn btn-sm btn-success addJadwal"><i class="fa fa-lg fa-plus"></i></a> </td> 
            </tr>
        </tfoot>
    </table>
</div>

@push('js')
 <script type="text/javascript">
    var i = 0; 
    $('#addJadwal').click(function(){ 
        i++; 
        // disii aku nulis arraynya manual
        // kalo tadi semisal kegiatan1 januari kosong trus ada kegiatan 2 januari diisi
        // arraynya bakal  baca ke array[0]
        // nah disini array aku masukin secara manual.
        // yang inya itu
        var tr = '<tr id="row'+i+'" class="dynamic-added">'+
                    '<td width="59%"><input name="nama_kegiatan['+i+']" class="form-control form-control-sm" /></td>'+
                    '<td width="3%"><input type="checkbox" name="januari['+i+']" class="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="februari['+i+']" class="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="maret['+i+']" class=""/></td>'+
                    '<td width="3%"><input type="checkbox" name="april['+i+']" class="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="mei['+i+']" class="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="juni['+i+']" class="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="juli['+i+']" class="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="agustus['+i+']" class="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="september['+i+']" class="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="oktober['+i+']" class="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="november['+i+']" class="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="desember['+i+']" class="" /></td>'+
                    '<td width="5%" class="text-center"><a href="#" name="removeJadwal" id="'+i+'" class="btn btn-danger btn-sm removeJadwal"><i class="fa fa-lg fa-times"></i></a></td>'+
                '</tr>';
        $('.jadwalpo').append(tr);
    });  

      $(document).on('click', '.removeJadwal', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
    });
</script>
@endpush

