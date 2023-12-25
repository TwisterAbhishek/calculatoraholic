@extends('template')

@section('head')
    <title>Emerging Vision | {{env('APP_NAME')}}</title>
@endsection

@section('body')

@include('emi.index')

@endsection