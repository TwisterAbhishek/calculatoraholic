@extends('template')

@section('head')
    <title>Tools | {{env('APP_NAME')}}</title>
@endsection

@section('body')
<div class="px-3 pt-5 p-md-5">
    <h1 class="mb-4 pe-2">Tools</h1>

    <div class="row m-0">
        @foreach ($tools as $item)
        <div class="col-lg-4 col-md-6 mb-2">
            <div class="card p-3 border mb-2 rounded-pill" id="toolCard">
                <a href="{{route($item->url)}}" class="stretched-link">
                    <i class="fa-solid fa-screwdriver-wrench"></i> &nbsp;{{$item->title}}
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection