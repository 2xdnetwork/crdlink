<?php //Settings: ****************************************************************
// $path = $app->request->get("api_path");
$pathToExtend = '.layouts.home';
$meta = $app->request->get('api_name'). ' | About us | Company Profile';
$description = 'We help entrepreneurs to help their clients with their credit, to truly change lives, and make a great living in the process.';
//Settings: ******************************************************************* ?> 

@extends($pathToExtend)

@section ('meta')
@include('/includes/meta')
@stop

@section ('other')
@include('/includes/other')
@stop

@section ('styles')
@include('/includes/styles')
@stop

@section ('header')
@include('/includes/header')
@stop

@section ('content')
@include('/content/about_us')
@stop

@section ('footer')
@include('/includes/footer')
@stop

@section ('scripts')
@include('/includes/scripts')
@stop