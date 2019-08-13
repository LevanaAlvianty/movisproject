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
            @if($proposal->jadwalpos)
                @foreach($proposal->jadwalpos as $i => $jadwal)
                        <tr id="row_jadwal_{{ $i }}" class="dynamic-added jadwal-tr">
                            <td width="59%"><input name="kegiatan[{{ $i }}]" class="form-control form-control-sm" value="{{$jadwal->kegiatan}}"/></td>
                            <td width="3%"><input type="checkbox" name="januari[{{ $i }}]" class="" value="1" {{($jadwal->stat_jan == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="februari[{{ $i }}]" class="" value="1" {{($jadwal->stat_feb == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="maret[{{ $i }}]" class="" value="1" {{($jadwal->stat_mar == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="april[{{ $i }}]" class="" value="1" {{($jadwal->stat_april == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="mei[{{ $i }}]" class="" value="1" {{($jadwal->stat_mei == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="juni[{{ $i }}]" class="" value="1" {{($jadwal->stat_jun == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="juli[{{ $i }}]" class="" value="1" {{($jadwal->stat_jul == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="agustus[{{ $i }}]" class="" value="1" {{($jadwal->stat_agust == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="september[{{ $i }}]" class="" value="1" {{($jadwal->stat_sept == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="oktober[{{ $i }}]" class="" value="1" {{($jadwal->stat_okt == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="november[{{ $i }}]" class="" value="1" {{($jadwal->stat_nov == '1') ? 'checked' : ''}} /></td>
                            <td width="3%"><input type="checkbox" name="desember[{{ $i }}]" class="" value="1" {{($jadwal->stat_des == '1') ? 'checked' : ''}} /></td>
                            <td width="5%" class="text-center"><a href="#" id="{{ $i }}" class="btn btn-danger btn-sm removeJadwal"><i class="fa fa-lg fa-times"></i></a></td>
                        </tr>
                @endforeach
            @endif
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
    var i = $('tr.jadwal-tr').length;
    $('#addJadwal').click(function(){ 
        var tr = '<tr id="row_jadwal_'+i+'" class="dynamic-added jadwal-tr">'+
                    '<td width="59%"><input name="kegiatan['+i+']" class="form-control form-control-sm" value="" /></td>'+
                    '<td width="3%"><input type="checkbox" name="januari['+i+']" class="" value="1" /></td>'+
                    '<td width="3%"><input type="checkbox" name="februari['+i+']" class="" value="1" /></td>'+
                    '<td width="3%"><input type="checkbox" name="maret['+i+']" class="" value="1"/></td>'+
                    '<td width="3%"><input type="checkbox" name="april['+i+']" class="" value="1" /></td>'+
                    '<td width="3%"><input type="checkbox" name="mei['+i+']" class="" value="1" /></td>'+
                    '<td width="3%"><input type="checkbox" name="juni['+i+']" class="" value="1" /></td>'+
                    '<td width="3%"><input type="checkbox" name="juli['+i+']" class="" value="1" /></td>'+
                    '<td width="3%"><input type="checkbox" name="agustus['+i+']" class="" value="1" /></td>'+
                    '<td width="3%"><input type="checkbox" name="september['+i+']" class="" value="1" /></td>'+
                    '<td width="3%"><input type="checkbox" name="oktober['+i+']" class="" value="1" /></td>'+
                    '<td width="3%"><input type="checkbox" name="november['+i+']" class="" value="1" /></td>'+
                    '<td width="3%"><input type="checkbox" name="desember['+i+']" class="" value="1" /></td>'+
                    '<td width="5%" class="text-center"><a href="#" name="removeJadwal" id="'+i+'" class="btn btn-danger btn-sm removeJadwal"><i class="fa fa-lg fa-times"></i></a></td>'+
                '</tr>';
        $('.jadwalpo').append(tr);
        i++;
    });  

      $(document).on('click', '.removeJadwal', function(){  
           var button_id = $(this).attr("id");   
           $('#row_jadwal_'+button_id+'').remove();  
    });
</script>
@endpush

