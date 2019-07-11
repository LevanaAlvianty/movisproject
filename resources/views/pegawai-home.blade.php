@extends('layouts.spi.master')
@section('title', 'Dashboard')

@section('judulapp')
    <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>User Home</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
@endsection
@section('content')
    @php
        $admin = Auth::guard('pegawai')->user()->isAdmin();
        $pic = Auth::guard('pegawai')->user()->isPic();
        $pimpinan = Auth::guard('pegawai')->user()->isPimpinan();
        $reviewerspi = Auth::guard('pegawai')->user()->isReviewerspi();
        $revieweranggaran = Auth::guard('pegawai')->user()->isReviewerang();
        $adminspi = Auth::guard('pegawai')->user()->isAdminspi();
        $adminperencanaan = Auth::guard('pegawai')->user()->isAdminperencanaan();
    @endphp

    @if($admin == 1)
        <p>admin</p>
    @endif

    @if($pic == 1)
        <p>pic</p>
    @endif

    @if($pimpinan == 1)
        <p>pimpinan</p>
    @endif

    @if($reviewerspi == 1)
        <p>reviewer spi</p>
    @endif

    @if($revieweranggaran == 1)
        <p>reviwer anggaran</p>
    @endif

    @if($adminspi == 1)
        <p>admin spi</p>
    @endif

    @if($adminperencanaan == 1)
        <p>admin perencanaan</p>
    @endif
@endsection
