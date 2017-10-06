@extend('default')

@section('title')
  Hello Checkin
@endsection

@section('custom_head')
  <link rel="stylesheet" href="/css/checkinStyle" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-lg-offset-2">
        <div class="fa fa-arrow-left" onclick="goback()"></div>
      </div>
    </div>
  </div>
@endsection

@section('custom_script')
  <script type="text/javascript" src="/js/checkinQrScan.js"></script>
@endsection