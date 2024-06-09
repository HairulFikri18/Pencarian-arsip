@extends('layout')

@section('content')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{$pegawai}}</h2>
                    <div class="m-b-5">PEGAWAI</div><i class="ti-user widget-stat-icon"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-info color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{$arsip}}</h2>
                    <div class="m-b-5">ARSIP</div><i class="ti-folder widget-stat-icon"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-warning color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">0</h2>
                    <div class="m-b-5">RAK</div><i class="ti-harddrives widget-stat-icon"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-danger color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">0</h2>
                    <div class="m-b-5">BOX</div><i class="ti-home widget-stat-icon"></i>
                </div>
            </div>
        </div>
    </div>

  
   
  
</div>
@endsection
