@extends('default')

@section('title')
  Index
@endsection

@section('custom_head')
  <link rel="stylesheet" href="/css/index.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
@endsection

@section('content')
     <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="text-head">Check in</h1> 
                </div>
            </div>
            <form action="/" method="post" id="form">
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 text-center">
                        {{ csrf_field() }}
                        <input class="pass-field" type="password" name="code" id="code" maxlength="6" pattern="[A-Za-z0-9]{6}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <input type="submit" value="Submit" class="btn btn-green"> 
                        <a href="/export">
                            <button type="button" class="btn btn-yellow export">Export Excel</button>    
                        </a>          
                    </div>
                </div>
            </form>
        </div>
@endsection
