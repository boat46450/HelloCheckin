@extends('default')

@section('title')
  Hello Checkin
@endsection

@section('custom_head')
  <link rel="stylesheet" href="/css/checkinStyle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
@endsection

@section('content')
  <div class="container-fluid">
    <div class="col-xs-12 text-center">
      <h2>Hello Scan QR</h2>
    </div>
    <div class="row">
      <div  class="col-xs-offset-1 col-xs-10 no-padding">
        <div class="size-camera" id="camera">
          <div class="container-fluid">
            <br>
            <video id="qrscan"></video>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('custom_script')
  <script type="text/javascript" src="/js/instascan.min.js"></script>
  <script type="text/javascript" src="/js/sweetalert.min.js"></script>
  <script type="text/javascript" src="/js/checkinQrScan-pre.js"></script>
@endsection
