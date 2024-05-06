@extends('tools.pageView')

@section('head')
    <title>Percentage To CGPA Calculator | {{env('APP_NAME')}}</title>
@endsection

@section('innersection')

<div class="row m-0">

    <div class="col-md-12">
        <h1 class="mb-4">Percentage To CGPA Calculator</h1>
        <p>Easily calculate your Percentage To CGPA with our simple and clean tool.</p>
    </div>

    <div class="col-md-12 py-3">
        <div id="wpsqldiv" class="row m-0">
            <div class="col-md-6 form-group mb-3">
                <label for="loanAmount">Enter Percentage</label>
                <input type="text" class="form-control form-control-lg" id="cgpa">
            </div>
            <div class="col-md-6 form-group mb-3">
                <label for="interestRate">Your CPGA</label>
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
            var res = (input / 100) * 10;
            $('#result').val(res.toFixed(2));
        }
    </script>
@endsection