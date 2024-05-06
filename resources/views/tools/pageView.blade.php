@extends('template')

@section('body')

<div class="container col-md-8 mt-5" id="pageView">
    @yield('innersection')
    
    @include('includes.tools')
</div>

@endsection