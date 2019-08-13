@push('css')
<style>

    .textarea-none-resize{
        width: 200px;
        height: 210px;
        resize: none;
    }
</style>
@endpush()

<table class="responsive">
    <table class="table">
        <tbody>
            <tr>
                <!-- Dokumen Jadwal -->
                <td width="65%">
                    <div class="tile">
                        <h5 style="text-align:left"><b>F. Jadwal Kegiatan</b></h5><br>
                      
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="7%" class="text-center align-middle" rowspan="2" >No</th>
                                        <th width="33%" class="text-center align-middle" rowspan="2" >Kegiatan</th>
                                        <th width="60%" class="text-center" colspan="12">BULAN</th>
                                    </tr>
                                    <tr>
                                        <th width="5%"  class="text-center">1</th>
                                        <th width="5%"  class="text-center">2</th>
                                        <th width="5%"  class="text-center">3</th>
                                        <th width="5%"  class="text-center">4</th>
                                        <th width="5%"  class="text-center">5</th>
                                        <th width="5%"  class="text-center">6</th>
                                        <th width="5%"  class="text-center">7</th>
                                        <th width="5%"  class="text-center">8</th>
                                        <th width="5%"  class="text-center">9</th>
                                        <th width="5%"  class="text-center">10</th> 
                                        <th width="5%"  class="text-center">11</th>
                                        <th width="5%"  class="text-center">12</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($proposal->jadwalpos)
                                        @foreach ($proposal->jadwalpos as $jadwal)
                                            <tr>
                                                <td class="text-center" width="7%">{{ $loop->iteration }}</td>
                                                <td  width="33%">{{$jadwal->kegiatan}}</td>
                                                @if($jadwal->stat_jan == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_feb == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_mar == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_april == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_mei == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_jun == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_jul == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_agust == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_sept == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_okt == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_nov == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif

                                                @if($jadwal->stat_des == 1)
                                                    <td class="text-center" width="5%" style="background-color:black;"></td>
                                                @else
                                                    <td class="text-center" width="5%" style="background-color:white;"></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    @endif
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </td>
                <!-- End Dokumen Jadwal -->

                <!-- Komentar Jadwal -->
                <td width="35%" class="text-center">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Komentar Jadwal Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <textarea name="r_jadwal" id="r_jadwal" cols="30" rows="10" 
                                        class="form-control form-control-sm textarea-none-resize">{{ $reviewproposalpo->r_jadwal }}
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <!-- End Komentar Jadwal -->
            </tr>
        </tbody>
    </table>
</table>


