<?php //Settings: ****************************************************************
// $path = $app->request->get("api_path");
$pathToExtend = '.layouts.home';
$meta = $app->request->get('api_name'). ' | Our Culture, Our Mission & Vision';
$description = 'Were a fast growing company whose work changes lives and is a force for massive positive impact in the world.';
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
@include('/content/culture')
@stop

@section ('footer')
@include('/includes/footer')
@stop

@section ('scripts')
@include('/includes/scripts')
@stop