<?php //Settings: ****************************************************************
// $path = $app->request->get("api_path");
$pathToExtend = '.layouts.home';
$meta = $app->request->get('api_name'). ' | The Millionaires Club';
$description = 'The Millionaires Club exists to provide recognition to those who took action, change a lot of lives';
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
@include('/content/millionaires_club')
@stop

@section ('footer')
@include('/includes/footer')
@stop

@section ('scripts')
@include('/includes/scripts')
@stop