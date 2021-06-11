<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    
    
     <script src="{{url('js/bootstrap.js')}}"></script>
     <script src="{{url('js/bootstrap.min.js')}}"></script>
     
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
   <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/> 
   
   <style>
   
   .cont1{
	   width:300px;height:300px;
	   }
   #cimg{
	   
	   height:200px;
	   width:200px;
	   }
   
   
   </style>
</head>
<body>
<!--{{ request()->route()->uri }}
{{ Route::currentRouteName() }}
-->
<?php 
//$currentURL = url()->full();
//dd($currentURL);

?>

<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12"  style="text-align: center;
font-size: 20px;
height: 139px;">

<h1 style="margin-top: 50px;">Software Development</h1>


</div>
</div>
</div>
       
<div class="container">
<div class="row" style="text-align:center;">



<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
 <a href="{{ url('/')    }}">Billing software</a>


</div>

<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
Food & Restaurant web develop

</div>

<div class="col-md-3 col-sm-3 col-xs-2 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
Hospital Software

</div>

<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
School Software
</div>



</div>

<div class="row" style="text-align:center;">

<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
Online shopping
</div>

<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
Construction Software
</div>

<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
Land web develop
</div>

<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
Job Search development
</div>

</div>


<div class="row" style="text-align:center;">

<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
Matrimony software
</div>

<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
kuzhu software
</div>

<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
Banking(Accounts)
</div>

<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 form-control cont1">
<img src="{{URL::asset('/images/img1.png')}}" alt="profile Pic" id="cimg"><br>
Android App(School,bill)
</div>

</div>
</div>













        
    </div>
</body>
</html>
