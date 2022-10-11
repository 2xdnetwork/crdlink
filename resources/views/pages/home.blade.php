<?php //Settings: ****************************************************************
// $path = $app->request->get("api_path");
$pathToExtend = '.layouts.home';
$meta = $app->request->get('api_name'). ' | Start a Life-Changing Credit Repair Business
';
$description = 'We have taught thousands how to build a profitable life-changing credit repair business without any prior experience.';
//Settings: ******************************************************************* ?> 

@extends($pathToExtend)

@section ('meta')
@include('/includes/meta')
@stop

@section ('styles')
@include('/includes/styles')
@stop

@section ('header')
@include('/includes/header')
@stop

@section ('content')
@include('/content/home')
@stop

@section ('footer')
@include('/includes/footer')
@stop

@section ('scripts')
@include('/includes/scripts')
@stop