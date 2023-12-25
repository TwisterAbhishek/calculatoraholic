@extends('template')

@section('head')
    <title>Tools | {{env('APP_NAME')}}</title>
@endsection

@section('body')
<div class="p-5">
    <h1 class="mb-4">Tools</h1>

    <div class="row m-0">
        @foreach ($tools as $item)
        <div class="col-md-4 pe-0 mb-2">
            <div class="card p-3 border-0" id="toolCard">
                <a href="{{route($item->url)}}" class="stretched-link">
                    {{$item->title}}
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection