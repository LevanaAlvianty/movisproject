<section>
                        <h5 style="text-align:center"><b>Halaman Pengesahan</b></h5><br>
                        
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <label for="" class="">1. Judul</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="judulprop" placeholder="Judul Kegiatan">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <label for="" class="">2. Acuan</label>
                            </div>
                            <div class="col-sm-8">
                                <select class="custom-select custom-select-sm" id="renstra">
                                    <option class="active">Program utama dalam Renstra yang diacu</option>
                                    @foreach($renstra as $r)
                                        <option value="{{ $r->id_renstra}}"> {{ $r->renstra }}</option>
                                    @endforeach -->/option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="" style="align:left">3. Pembiayaan</label>
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">a. Paguyang diajukan</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <input type="text" class="form-control form-control-sm" id="paguyang" placeholder="Rp ">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">b. MAK</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <input type="text" class="form-control form-control-sm" id="mak" placeholder="MAK">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">c. Anggaran</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <select class="custom-select custom-select-sm" id="kelanggaran">
                                        <option class="active">RM/BOPTN/PNBP</option>
                                        @foreach($anggaran as $a)
                                            <option value="{{ $a->id_kelang}}"> {{ $a->kelompokanggaran }}</option>
                                        @endforeach -->/option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="">4. Ketua Pelaksana Kegiatan</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">a. Nama</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <input type="text" class="form-control form-control-sm" id="ketuplak1" placeholder="Nama Ketua Pelaksana">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">b. Jenis Kelamin</label>
                                </div>
                                <div class="form-inline col-sm-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="JK" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="JK">L</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="JK1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="JK1">P</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">c. NIP</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <input type="text" class="form-control form-control-sm" id="nip1" placeholder="Nomor Induk Pegawai (NIP)">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">d. Jabatan Struktural</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <input type="text" class="form-control form-control-sm" id="jabstruk" placeholder="Jabatan Struktural">
                                </div>
                            </div>
                            
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">e. Jabatan Fungsional</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <input type="text" class="form-control form-control-sm" id="jabfung" placeholder="Jabatan Fungsional">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">f. Unit Pelaksana</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <input type="text" class="form-control form-control-sm" id="unitpel" placeholder="Unit Pelaksana">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="">5. Pelaksanaan</label>
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">a. Bulan/Minggu</label>
                                </div>
                                <div class="form-inline col-sm-8">
                                    <select class="custom-select custom-select-sm" id="bln1">    
                                        @foreach($getMonth as $month)
                                            <option>
                                                {!! $month!!}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="" class="ml-3 mr-3">s.d</label>
                                    <select class="custom-select custom-select-sm" id="bln2">    
                                        @foreach($getMonth as $month)
                                            <option>
                                                {!! $month!!}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">b. Tempat</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <input type="text" class="form-control form-control-sm" id="tempat" placeholder="Tempat">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="">6. Target yang diharapkan</label>
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">a. Luaran</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="luaran" placeholder="Luaran">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <label for="" class="ml-sm-3">b. Dampak yang timbul</label>
                                </div>
                                <div class="col-sm-8 ">
                                    <textarea class="form-control form-control-sm" style="resize:none" id="" rows="4" cols="1" placeholder="Dampak yang timbul"></textarea>
                                </div>
                            </div>
                        </div><br>

                        <div class="row justify-content-end">
                            <div class="col-sm-2">
                                <label for="formGroupExampleInput" >Semarang, </label>
                            </div>
                            <div class="col-sm-3">
                                <input type="date" class="form-control form-control-sm" id="tgl" placeholder="Tanggal Bulan Tahun">
                            </div> 
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-sm-5">
                                <label for="formGroupExampleInput" class="">Menyetujui, </label>
                                <select class="custom-select custom-select-sm mb-2" id="anggaran">
                                    <option selected value="Wadir Akademik">Pimpinan unit pelaksana kegiatan</option>
                                    <option value="Wadir Kemahasiswaan">Wadir Kemahasiswaan</option>    
                                </select>
                            </div>
                            <div class="col-sm-5">
                                <label for="formGroupExampleInput" class="">Ketua Pelaksana, </label>
                            </div>  
                        </div><br><br>

                        <div class="row justify-content-between">
                            <div class="col-sm-5">
                                <!-- <u><input type="text" class="form-control form-control-sm mb-2" id="NamaUP" placeholder="Nama"></u> -->
                                <select class="custom-select custom-select-sm mb-2" id="anggaran">
                                    <option selected value="Wadir Akademik">Nama Unit Pelaksana</option>
                                    <option value="Wadir Kemahasiswaan">Wadir Kemahasiswaan</option>
                                    <option value="Wadir Perencanaan & Kerjasama">Wadir Perencanaan & Kerjasama</option>
                                </select>
                                <div class="form-inline">
                                    <label for="formGroupExampleInput" class="mr-sm-3">NIP</label>
                                    <input type="text" class="form-control form-control-sm" id="NIP_UP" placeholder="NIP">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <!-- <u><input type="text" class="form-control form-control-sm mb-2" id="NamaKP" placeholder="Nama"></u> -->
                                <select class="custom-select custom-select-sm mb-2" id="anggaran">
                                    <option selected value="Wadir Akademik">Nama Ketua Pelaksana</option>
                                    <option value="Wadir Kemahasiswaan">Wadir Kemahasiswaan</option>
                                    <option value="Wadir Perencanaan & Kerjasama">Wadir Perencanaan & Kerjasama</option>
                                </select>
                                <div class="form-inline">
                                    <label for="formGroupExampleInput" class="mr-sm-3">NIP</label>
                                    <input type="text" class="form-control form-control-sm" id="NIP_KP" placeholder="NIP">
                                </div>
                            </div>  
                        </div><br><br>

                        <div class="row justify-content-between">
                            <div class="col-sm-5">
                                <label for="formGroupExampleInput" class="">Menyetujui, </label>
                                <select class="custom-select custom-select-sm" id="anggaran">
                                    <option selected value="Wadir Akademik">Wadir Akademik</option>
                                    <option value="Wadir Kemahasiswaan">Wadir Kemahasiswaan</option>
                                    <option value="Wadir Perencanaan & Kerjasama">Wadir Perencanaan & Kerjasama</option>
                                </select>
                            </div>
                            <div class="col-sm-5">
                                <label for="formGroupExampleInput" class="">Mengetahui, </label>
                                <select class="custom-select custom-select-sm" id="anggaran">
                                    <option selected value="Wadir Akademik">Wadir Akademik</option>
                                    <option value="Wadir Kemahasiswaan">Wadir Kemahasiswaan</option>
                                    <option value="Wadir Perencanaan & Kerjasama">Wadir Perencanaan & Kerjasama</option>
                                </select>
                            </div>  
                        </div><br><br>

                        <div class="row justify-content-between">
                            <div class="col-sm-5">
                                <!-- <u><input type="text" class="form-control form-control-sm mb-2" id="NamaWUK" placeholder="Nama"></u> -->
                                <select class="custom-select custom-select-sm mb-2" id="anggaran">
                                    <option selected value="Wadir Akademik">Nama Wadir Keuangan</option>
                                    <option value="Wadir Kemahasiswaan">Wadir Kemahasiswaan</option>
                                    <option value="Wadir Perencanaan & Kerjasama">Wadir Perencanaan & Kerjasama</option>
                                </select>
                                <div class="form-inline">
                                    <label for="formGroupExampleInput" class="mr-sm-3">NIP</label>
                                    <input type="text" class="form-control form-control-sm" id="NIP_WUK" placeholder="NIP">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <!-- <u><input type="text" class="form-control form-control-sm mb-2" id="NamaWA" placeholder="Nama"></u> -->
                                <select class="custom-select custom-select-sm mb-2" id="namaWA">
                                    <option selected value="Wadir Akademik">Nama Wadir</option>
                                    <option value="Wadir Kemahasiswaan">Wadir Kemahasiswaan</option>
                                    <option value="Wadir Perencanaan & Kerjasama">Wadir Perencanaan & Kerjasama</option>
                                </select>
                                <div class="form-inline">
                                    <label for="formGroupExampleInput" class="mr-sm-3">NIP</label>
                                    <input type="text" class="form-control form-control-sm" id="NIP_WA" placeholder="NIP">
                                </div>
                            </div>  
                        </div><br><br>

                        <div class="justify-content-center">
                            <div class="col-sm-2  mx-auto">
                                <label for="formGroupExampleInput" class="">Mengetahui, </label>
                            </div>
                            <div class="col-sm-2 mx-auto">
                                <label for="formGroupExampleInput">Direktur</label>
                            </div>
                        </div><br><br>

                        <div class="justify-content-center">
                            <div class="col-sm-5 mx-auto">
                                <!-- <u><input type="text" class="form-control form-control-sm mb-2" id="NamaWUK" placeholder="Nama"></u> -->
                                <select class="custom-select custom-select-sm mb-2" id="anggaran">
                                    <option selected value="Wadir Akademik">Nama Direktur</option>
                                    <option value="Wadir Kemahasiswaan">Wadir Kemahasiswaan</option>
                                    <option value="Wadir Perencanaan & Kerjasama">Wadir Perencanaan & Kerjasama</option>
                                </select>
                                <div class="form-inline">
                                    <label for="formGroupExampleInput" class="mr-sm-3">NIP</label>
                                    <input type="text" class="form-control form-control-sm" id="NIP_Dir" placeholder="NIP">
                                </div>
                            </div>
                        </div>         
</section> 

@push('js')
@endpush
