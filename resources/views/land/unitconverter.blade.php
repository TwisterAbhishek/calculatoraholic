@extends('template')

@section('head')
    <title>Land Unit Calculator | {{env('APP_NAME')}}</title>
@endsection

@section('body')

<div class="container mt-5">

    <div class="row m-0">

        <div class="col-md-12">
            <h1 class="mb-4">Land Unit Calculator</h1>
            <p>Easily calculate your Land Unit with our simple and clean tool.</p>
        </div>

        <div class="col-md-12 py-3">
            <div class="row m-0">
                <div class="col-md-12 p-0 px-2 my-2">
                    <input type="number" placeholder="Enter Number Here" class="border col-md-12 px-2 py-3 rounded-2 small"
                        style="outline: none; width: 100%;" id="num_val" value="0" oninput="lengthConverter(this.value)"
                        onchange="lengthConverter(this.value)">
    
                    <div>
                        <select name="" id="onChange" class="border my-3 px-2 py-3 rounded-2 small"
                            style="outline: none; width: 100%;">
                            <option disabled selected>Select your unit</option>
                            <option value="Nali">Nali</option>
                            <option value="Bigha">Bigha</option>
                            <option value="Gaj">Gaj</option>
                            <option value="SqMt">Sq. Mtr.</option>
                            <option value="SqFt">Sq. Ft.</option>
                            <option value="Mutthi">Mutthi</option>
                            <option value="Acre">Acre</option>
                            <option value="SqYards">Sq. yards</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 p-0">
                    <div class="card p-4 mx-2" style="min-height: 300px; font-weight: 400; font-size: 18px;">
                        <div class="d-flex py-2 align-items-center justify-content-between small"
                            style="border-bottom: 1px solid #eee;">
                            <div>Nali</div>
                            <div id="nali">0</div>
                        </div>
                        <div class="d-flex py-2 align-items-center justify-content-between small"
                            style="border-bottom: 1px solid #eee;">
                            <div>Bigha</div>
                            <div id="bigha">0</div>
                        </div>
                        <div class="d-flex py-2 align-items-center justify-content-between small"
                            style="border-bottom: 1px solid #eee;">
                            <div>Gaj</div>
                            <div id="gaj">0</div>
                        </div>
                        <div class="d-flex py-2 align-items-center justify-content-between small"
                            style="border-bottom: 1px solid #eee;">
                            <div>Sq. mt.</div>
                            <div id="sqmt">0</div>
                        </div>
                        <div class="d-flex py-2 align-items-center justify-content-between small"
                            style="border-bottom: 1px solid #eee;">
                            <div>Mutthi</div>
                            <div id="mutthi">0</div>
                        </div>
                        <div class="d-flex py-2 align-items-center justify-content-between small"
                            style="border-bottom: 1px solid #eee;">
                            <div>Sq. Ft.</div>
                            <div id="sqft">0</div>
                        </div>
                        <div class="d-flex py-2 align-items-center justify-content-between small"
                            style="border-bottom: 1px solid #eee;">
                            <div>Acre</div>
                            <div id="acre">0</div>
                        </div>
                        <div class="d-flex py-2 align-items-center justify-content-between small"
                            style="border-bottom: 1px solid #eee;">
                            <div>Sq. Yards</div>
                            <div id="yards">0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection

@section('foot')
<script src="/assets/js/landunit.js"></script>
@endsection