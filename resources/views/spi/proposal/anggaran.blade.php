
                        <h5 style="text-align:left"><b>G. Anggaran</b></h5>
                        <p> </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="30%" rowspan="2" class="text-center align-middle">Uraian</th>
                                        <th width="15%" colspan="3" class="text-center">Volume</th>
                                        <th width="20%" rowspan="2" class="text-center align-middle">Biaya Satuan</th>
                                        <th width="25%" rowspan="2" class="text-center align-middle">Biaya</th>
                                        <th width="5%" rowspan="2" class="text-center align-middle">Option</th>
                                    </tr>
                                    <tr>
                                        <th width="5%" class="text-center">Jumlah 1</th>
                                        <th width="5%" class="text-center">Jumlah 2</th>
                                        <th width="5%" class="text-center">Jumlah 3</th>
                                    </tr>
                                </thead>
                                <tbody class="anggaran">
                                    
                                    @foreach($anggaranpo as $angg)
                                        @if($angg->id_proposal == $proposal->prop_id)
                                        <tr id="row0">
                                            <td width="30%" >
                                            <select class="form-control barang" name="barang[]" id="barang" placeholder="Pilih Barang" style="width: 100%">
                                                @foreach ($barang as $brg)
                                                    <option value="{{ $brg->id_standartbiaya }}"
                                                        @if($brg->id_standartbiaya == $angg->id_barang )
                                                            selected
                                                        @endif>  
                                                    {{ $brg->namabarang }}</option>
                                                @endforeach
                                            </select>
                                            <td width="" ><input name="jml1[]" class="form-control form-control-sm jml1" value="{{$angg->jml1}}"/></td>
                                            <td width="" ><input name="jml2[]" class="form-control form-control-sm jml2" value="{{$angg->jml2}}"/></td>
                                            <td width="" ><input name="jml3[]" class="form-control form-control-sm jml3" value="{{$angg->jml3}}"/></td>
                                            <td width="" ><input id="hrg" name="hrg[]" class="form-control form-control-sm hrg" value="{{$angg->harga}}"/></td>
                                            <td width="" ><input name="total[]" class="form-control form-control-sm total" value="{{$angg->total}}"/></td>
                                            <td width="5%" class="text-center"><a href="#" id="0" class="btn btn-danger btn-sm remove"><i class="fa fa-lg fa-times"></i></a></td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td style=""></td> 
                                    <td style=""></td> 
                                    <td style=""></td> 
                                    <td></td> 
                                    <td><b>Total</b></td> 
                                    <td><b class="tot"></b></td> 
                                    <td width="5%" class="text-center">
                                    <a href="#" id="add" class="btn btn-sm btn-success addRow"><i class="fa fa-lg fa-plus"></i></a>
                                    </td> 
                                </tr>
                            </tfoot>
                            </table>
                        </div>
             

@push('js')
<!-- </script> -->
<script type="text/javascript">
$(document).ready(function(){
    $('.anggaran').delegate('.barang','change',function(){
        var tr = $(this).parent().parent();
        tr.find('.jml1').focus();
    });

     //change harga
     $('.anggaran').delegate('.barang','change',function(){
        var tr = $(this).parent().parent();
        var brg_id = tr.find('.barang').val();
        console.log(brg_id);
        var op = ""; 
             $.ajax({
                type:'get',
                url:'{!!URL::to('findBarang')!!}',
                data:{'id_standartbiaya':brg_id},
                dataType:'json',
                success:function(data){
                    console.log("hargasatuan");
                    console.log(data.hargasatuan);

                    tr.find('.hrg').val(data.hargasatuan);   
              },
              error:function(){
            }
        });
    });

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

    //-----------------------------------call function number------------------------------------------
    findRowNumOnly('.jml1');
    findRowNumOnly('.jml2');
    findRowNumOnly('.jml3');
    findRowNum('.hrg');
    
    //-----------------------------------add row------------------------------------------ 
    var i = 0;  
    $('#add').click(function(){ 
        i++; 
        var tr = '<tr id="row'+i+'" class="dynamic-added">'+
                        '<td width="30%" >'+
                        '<select class="form-control barang" name="barang[]" id="barang" placeholder="Pilih Barang" style="width: 100%">'+
                                '@foreach ($barang as $brg)'+
                                '<option value="{{ $brg->id_standartbiaya }}">{{ $brg->namabarang }}</option>'+
                            '@endforeach'+
                        '</select>'+
                        '</td>'+
                        
                        '<td width="" ><input name="jml1[]" class="form-control form-control-sm jml1" /></td>'+
                        '<td width="" ><input name="jml2[]" class="form-control form-control-sm jml2" /></td>'+
                        '<td width="" ><input name="jml3[]" class="form-control form-control-sm jml3" /></td>'+
                        '<td width="" ><input name="hrg[]" class="form-control form-control-sm hrg" /></td>'+
                        '<td width="" ><input name="total[]" class="form-control form-control-sm total" /></td>'+
                        '<td width="5%" class="text-center"><a href="#" name="remove" id="'+i+'" class="btn btn-danger btn-sm remove"><i class="fa fa-lg fa-times"></i></a></td>'+
                    '</tr>';
        $('.anggaran').append(tr);

        // Inisialisasi Select2
        $(".barang").select2({
            width: 'resolve',
            placeholder: 'Pilih Barang',
            allowClear: true,
            theme: "bootstrap",
        });
        $(window).resize(function() {
            $('.barang').css('width', "100%");
        });
        // End Select2
    });  

    //------------------------------remove row-----------------------------------
    $(document).on('click', '.remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
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

    //------------------------------find element by row------------------------------------------
    function findRowNum(input){
        $('.anggaran').delegate(input,'keydown',function(){
            var tr = $(this).parent().parent();
            number(tr.find(input));
        });
    }

    function findRowNumOnly(input){
        $('.anggaran').delegate(input,'keydown',function(){
            var tr = $(this).parent().parent();
            number(tr.find(input));
        });
    }

    //------------------------------number and dot------------------------------------------
    function number(input){
        $(input).keypress (function (evt){
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode( key );
            var regex = /[-\d\.]/;
            var objRegex = /^-?\d*[\.]?\d*$/;
            var val = $(evt.target).val();
            if(!regex.test(key) || !objRegex.test(val+key) ||
                !theEvent.keyCode == 46 || !theEvent.keyCode == 8){
                    theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            };
        });
    };

    function numberOnly(input){
        $(input).keypress (function (evt){
            var e = event || evt;
            var charCode = e.which || e.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
        });
    };
    //------------------------------end create function by user-----------------------------------
});

</script>

<script type="text/javascript">
$(document).ready(function(){
    //Select2 NamaBarang
    $(".barang").select2({
        width: 'resolve',
        placeholder: 'Pilih Barang',
        allowClear: true,
        theme: "bootstrap",
    });
    $(window).resize(function() {
        $('.barang').css('width', "100%");
    });
});
</script> 

@endpush


