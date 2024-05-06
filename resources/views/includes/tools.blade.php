@php
    $tools = DB::table('urls')->where('url_status', 1)->get();
@endphp

<div class="pt-md-4">
    <h1 class="mb-4 pe-2">All Tools</h1>

    <div class="row m-0">
        @foreach ($tools as $item)
        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-2">
            <div class="card p-3 border mb-2 rounded-4" id="toolCard" data-bs-title="{{$item->title}}" data-bs-toggle="tooltip" style="background-color: rgba({{rand(0,999)}}, {{rand(0,999)}}, {{rand(0,999)}}, 0.10)">
                <div class="text-center py-5">{!! $item->icon !!}</div>
                <a href="{{route($item->url)}}" class="stretched-link text-center mb-3">
                     &nbsp;{{$item->title}}
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>