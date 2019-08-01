<h2 class="text-center my-5">Lampiran</h2>

@if(count($errors) > 0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        {{ $error }} <br/>
    @endforeach
</div>
@endif
  
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th width="" class="text-center">Lampiran (.pdf)</th>
                    <th width="" class="text-center"></th>
                    <th width="" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody id="lampiran">
                <tr>
                    <td width="40%"><input type="file" name="gambar_input[0]"  class="btn btn-small btn-default" ></td>
                    <td width="50%"><input name="keterangan_input[0]" class="form-control form-control-sm" /></td>
                    <td width="10%"></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td></td> <td></td> 
                    <td>
                        <button class="btn btn-sm btn-success" onclick="add(); return false"><i class="fa fa-lg fa-plus"></i></button>
                    </td>
                </tr>
            </tfoot>
        </table>
        <input type="submit" value="Upload" class="btn btn-primary">
    </div>
    

@push('js')
<script>
    var i = 1;
    function add() {
    //menentukan target append
    var itemlist = document.getElementById('lampiran');
                    
    //membuat element
    var row = document.createElement('tr');
    var gambar = document.createElement('td');
    var keterangan = document.createElement('td');
    var aksi = document.createElement('td');
     
    //meng append element
    itemlist.appendChild(row);
    row.appendChild(gambar);
    row.appendChild(keterangan);
    row.appendChild(aksi);
     
    //membuat element input
    var gambar_input = document.createElement('input');
    gambar_input.setAttribute('name', 'gambar_input[' + i + ']');
    gambar_input.setAttribute('class', 'btn btn-small btn-default');
    gambar_input.setAttribute('type','file');

    var keterangan_input = document.createElement('input');
    keterangan_input.setAttribute('name', 'keterangan_input[' + i + ']');
    keterangan_input.setAttribute('class', 'form-control form-control-sm');

    var hapus = document.createElement('span');
     
    //meng append element input
    // no.appendChild(no_input);
    gambar.appendChild(gambar_input);
    keterangan.appendChild(keterangan_input);
    aksi.appendChild(hapus);
    
    hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fa fa-lg fa-times"></i></button>';

    //  membuat aksi delete element
        hapus.onclick = function () {
            row.parentNode.removeChild(row);
        };
        
        i++;
    }
</script> 
@endpush()