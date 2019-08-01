<h5 style="text-align:center"><b>DAFTAR LAMPIRAN</b></h5><br>
<div class="row justify-content-between">
    <div class="col-sm-8 ">
        <input name="nama_input[0]" type="text" class="form-control form-control-sm" id="lampiran" placeholder="Nama Lampiran ">
    </div>
                            
    <div class="col-sm-2">
        <input type="text" class="form-control form-control-sm mr-sm-2" id="halaman">
    </div><br>
    <div class="col-sm-2">
        <button class="btn btn-small btn-success" onclick="addi(); return false"><i class="glyphicon glyphicon-plus"></i></button>
    </div>
</div>
                            
@push('js')
<script>
var i = 1;
function addi() {
//menentukan target append
    var itemlist = document.getElementById('lampiran');
                
//membuat element
    var row = document.createElement('input');
    // var no = document.createElement('td');
    var nama = document.createElement('input');
    
 
//meng append element
    itemlist.appendChild(row);
    row.appendChild(nama_input);
    // row.appendChild(nip);
   
 
//membuat element input
    var nama_input = document.createElement('input');
    nama_input.setAttribute('name', 'nama_input[' + i + ']');
    nama_input.setAttribute('class', 'form-control form-control-sm');

    var hapus = document.createElement('span');
 
//meng append element input
    nama.appendChild(nama_input);
    
 
    hapus.innerHTML = '<button class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i></button>';
//  membuat aksi delete element
    hapus.onclick = function () {
        row.parentNode.removeChild(row);
    };
 
    i++;
}
</script>
@endpush()
                        
                        
                  
                        
                       