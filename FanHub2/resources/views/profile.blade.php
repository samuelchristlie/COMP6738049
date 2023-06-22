@if(isset($profile))
@php
$title = " - @".$profile->username;
@endphp
@else
@php
$title = "";
@endphp
@endif

@extends('template', ['pageTitle' => 'FanHub'.$title])

@section('header')

@if(isset($user))
@include('navbar.user')
@else
@include('navbar.guest')
@endif

@endsection

@section('content')
@if(isset($profile))
@include('component.wall')
@else
@include('component.usernotfound')
@endif
@endsection