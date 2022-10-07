<?php //Settings: ****************************************************************
// $path = $app->request->get("api_path");
$pathToExtend = '.layouts.home';
$meta = $app->request->get('api_name'). ' | Start Your 30 Day FREE Trial';
$description = 'Enabling People To Truly Change Lives, and Make a Great Living in the Process';
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
@include('/content/free_trial')
@stop

@section ('footer')
@include('/includes/footer')
@stop

@section ('scripts')
@include('/includes/scripts')
@stop