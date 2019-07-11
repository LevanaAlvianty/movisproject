
                        <h5 style="text-align:left"><b>G. Anggaran</b></h5>
                        <p> </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="30%" rowspan="2" class="text-center align-middle">Uraian</th>
                                        <th width="30%" colspan="3" class="text-center">Volume</th>
                                        <th width="15%" rowspan="2" class="text-center align-middle">Biaya Satuan</th>
                                        <th width="15%" rowspan="2" class="text-center align-middle">Biaya</th>
                                        <th width="5%" rowspan="2" class="text-center align-middle">Option</th>
                                    </tr>
                                    <tr>
                                        <th width="" class="text-center">Jumlah 1</th>
                                        <th width="" class="text-center">Jumlah 2</th>
                                        <th width="" class="text-center">Jumlah 3</th>
                                    </tr>
                                </thead>
                                <tbody class="anggaran">
                                    <tr>
                                        <td width="" ><input id="namabarang" name="namabarang[]" class="form-control form-control-sm namabarang" /></td>
                                        <td width="" ><input name="jml1[]" class="form-control form-control-sm jml1" /></td>
                                        <td width="" ><input name="jml2[]" class="form-control form-control-sm jml2" /></td>
                                        <td width="" ><input name="jml3[]" class="form-control form-control-sm jml3" /></td>
                                        <td width="" ><input id="hrg" name="hrg[]" class="form-control form-control-sm hrg" disable="true"/></td>
                                        <td width="" ><input name="total[]" class="form-control form-control-sm total" /></td>
                                        <td width="5%" class="text-center"><a href="#" class="btn btn-danger btn-sm remove"><i class="fa fa-lg fa-times"></i></a></td>
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
                                    </td> 
                                </tr>
                            </tfoot>
                            </table>
                        </div>
             

@push('js')
<!-- </script> -->
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

@endpush


