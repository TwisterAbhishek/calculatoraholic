@extends('tools.pageView')

@section('head')
    <title>CGPA To Percentage Calculator | {{env('APP_NAME')}}</title>
@endsection

@section('innersection')

<div class="row m-0">

    <div class="col-md-12">
        <h1 class="mb-4">CGPA To Percentage Calculator</h1>
        <p>Easily calculate your CGPA to percentage with our simple and clean tool.</p>
    </div>

    <div class="col-md-12 py-3">
        <div id="wpsqldiv" class="row m-0">
            <div class="col-md-6 form-group mb-3">
                <label for="loanAmount">Enter CGPA</label>
                <input type="text" class="form-control form-control-lg" id="cgpa">
            </div>
            <div class="col-md-6 form-group mb-3">
                <label for="interestRate">Your Percenatge</label>
                <input type="text" class="form-control form-control-lg" readonly id="result">
            </div>
            
            <div class="col-md-4 mt-2">
                <button type="submit" class="btn btn-primary btn-lg" id="subBtn" onclick="convert(this);">Convert to %</button>
            </div>
        </div>
    </div>

</div>

@endsection

@section('foot')

    <script>
        function convert(elem)
        {
            var input = $('#cgpa').val();
            var a = input * 10;
            $('#result').val(a);
        }
    </script>
@endsection