@extends('layouts.spi.master');
@section('title', 'Laporan')
@push('css')
<style>
    /*custom font*/
    @import url(https://fonts.googleapis.com/css?family=Montserrat);
  
    /*form styles*/
    #msform {
    width: auto;
	margin: 10px auto;
	/* text-align: center; */
	position: relative;
   }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 2px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        padding: 20px 20px;
        box-sizing: border-box;
        width: 100%;
	    
        /*stacking fieldsets above each other*/
        position: relative;
        display:table-cell; 
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }
    
    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
        
    }
    #progressbar li {
        list-style-type: none;
        color: black;
        text-transform: uppercase;
        text-align:center;
        font-size: 0.65vw;
        width: 9.09%;
        position: relative;
        float: left;
    }
    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 35px;
        line-height: 35px;
        display: block;
        font-size: 15px;
        text-align:center;
        color: #333;
        background: lightgrey;
        border-radius: 50%;
        margin: 0 auto 5px auto; 
    }
     /*progressbar connectors*/
     #progressbar li:after {
        content: '';
        width: 68%;
        height: 2px;
        background: lightgrey;
        position: absolute;
        left: -34%;
        top: 15px;
        z-index: 1; /*put it behind the numbers*/
    }
    #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none; 
    }
    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,  #progressbar li.active:after{
        background: #27AE60;
        color: white;
    }

    .textarea-none-resize{
        width: 100px;
        height: 210px;
        resize: none;
    }
</style>
@endpush()

@section('judulapp')
    <div>
        <h1><i class="fa fa-file-text-o"></i> Laporan</h1>
        <p>Tahap Pembuatan Laporan</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Laporan</a></li>
        <li class="breadcrumb-item"><a href="#">Buat Laporan</a></li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                    
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif

            @if ($reviewlaporanpo->id)
                <form id="msform" action="{{ route('reviewerspi.reviewlaporan.updatereviewlaporan', $reviewlaporanpo->id) }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}    
            @else    
                <form id="msform" action="{{ route('reviewerspi.reviewlaporan.simpanreviewlaporan', $laporan->id) }}" method="POST">
                    {{csrf_field()}}
                    {{method_field('POST')}}  
            @endif 
            
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Sampul Depan</li> 
                    <li>Halaman Pengesahan</li>
                    <li>Kata Pengantar</li>
                    <li>Daftar isi</li>
                    <li>Daftar Lampiran</li>                   
                    <li>BAB I</li>
                    <li>BAB II</li>
                    <li>BAB III</li>
                    <li>BAB IV</li>
                    <li>BAB V</li>
                    <li>Lampiran</li>
                </ul>

                <fieldset>
                    @include('reviewerspi.laporan.sampul') <br>
                    <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset>

                <fieldset>
                    @include('reviewerspi.laporan.pengesahan')
                    <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset>
                
                <fieldset>
                    @include('reviewerspi.laporan.katapengantar') <br>
                    <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset>

                <fieldset>
                    @include('reviewerspi.laporan.daftarisi') <br>
                    <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset>

                <fieldset>
                    @include('reviewerspi.laporan.daftarlampiran')  <br>    
                    <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset>

                <fieldset>
                    @include('reviewerspi.laporan.bab1') <br>
                    <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset>

                <fieldset>
                @include('reviewerspi.laporan.bab2') <br>
                    <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset>

                <fieldset>
                     @include('reviewerspi.laporan.bab3') <br>
                    <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset>

                <fieldset>
                    @include('reviewerspi.laporan.bab4') <br>
                    <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset>

                <fieldset>
                    @include('reviewerspi.laporan.bab5') <br>
                    <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    <button id="next" class="btn btn-info btn-sm next" style="float:right;" type="button">Next <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset>

                <fieldset>
                    @include('reviewerspi.laporan.lampiran') br 
                    <button id="previous" class="btn btn-info btn-sm previous" type="button" style="float:left;"><i class="fa fa-caret-left fa-lg"></i> Previous</button>
                    <button type="submit" id="submit" class="btn btn-success btn-sm submit" style="float:right;" type="button">Submit <i class="fa fa-caret-right fa-lg"></i></button>
                </fieldset><br>
                <a href="{{route('reviewerspi.reviewlaporan.index')}}" class="btn btn-danger btn-sm" style="float:right;"><i class="fa fa-home fa-lg"></i> Kembali ke Halaman Index</a> 
                <button type="submit" id="submit" class="btn btn-success btn-sm submit mr-2" style="float:right;" type="button"><i class="fa fa-floppy-o fa-lg"></i> Simpan</button>
            </form> 
            
        </div>
    </div>
</div>
@endsection()

@push('js')
<script>
//jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches
    $(function() {
      $(".next").click(function () {
        if (animating) return false;
        animating = true;
      
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
      
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
      
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
          step: function (now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = now * 50 + "%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
              'transform': 'scale(' + scale + ')',
              'position': 'relative' });
      
            next_fs.css({ 'left': left, 'opacity': opacity });
          },
          duration: 800,
          complete: function () {
            current_fs.hide();
            animating = false;
          },
          //this comes from the custom easing plugin
          easing: 'easeInOutBack' });
      
      });
    });

    $(function() {
      $(".previous").click(function () {
        if (animating) return false;
        animating = true;
      
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
      
        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
      
        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
          step: function (now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = (1 - now) * 50 + "%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({ 'left': left });
            previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity , 'position': 'relative'});
          },
          duration: 800,
          
          complete: function () {
            current_fs.hide();
            animating = false;
          },
          
          //this comes from the custom easing plugin
          easing: 'easeInOutBack' });
         
      });
    });
      
    //scroll bar to top
    $('.next, .previous').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1200);
            return false;
    });
 
</script>

@endpush()

