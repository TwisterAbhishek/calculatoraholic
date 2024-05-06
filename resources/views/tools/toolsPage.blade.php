@extends('template')

@section('head')
    <title>All Tools | {{env('APP_NAME')}}</title>
@endsection

@section('body')

<div class="container col-md-8 mt-5" id="pageView">
@include('includes.tools')
</div>

@endsection