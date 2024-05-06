@extends('tools.pageView')

@section('head')
    <title>SQL Queries to change wordpress website domain | {{env('APP_NAME')}}</title>
@endsection

@section('innersection')

<div class="row m-0">

    <div class="col-md-12">
        <h1 class="mb-4">SQL Queries to change wordpress website domain</h1>
        <p>When moving WordPress websites from one domain to another, this tool is a great time saver. Just generate the queries and run them in MySQL.</p>
    </div>

    <div class="col-md-12 py-3">
        <form id="wpsqlForm" class="row m-0" method="post">
            @csrf
            <div class="col-md-6 form-group mb-3">
                <label for="loanAmount">Previos URL</label>
                <input type="text" class="form-control form-control-lg" name="p_url" value="http://localhost/" id="p_url">
            </div>
            <div class="col-md-6 form-group mb-3">
                <label for="interestRate">New URL</label>
                <input type="text" class="form-control form-control-lg" name="n_url" value="http://earlylifestyle.com" id="n_url">
            </div>
            
            <div class="col-md-4 mt-2">
                <button type="submit" class="btn btn-primary btn-lg" id="subBtn" onclick="getScript();">Generate Query</button>
            </div>
        </form>
    </div>
    <div class="col-md-12 p-4">
        <div class="border bg-light p-3 text-primary rounded-3 user-select-all" id="scriptData" style="display: none;">
            
        </div>
    </div>

</div>

@endsection

@section('foot')

    <script>
        $(document).ready(function () {
            $('#wpsqlForm').submit(function (event) {
                event.preventDefault();
                $('#subBtn').prop('disabled', true);
                $('#subBtn').html('Please wait...');
                $.ajax({
                    type: 'POST',
                    url: '{{ route("wpsqlcalculate") }}',
                    data: $(this).serialize(),
                    success: function (response) {
                        $('#subBtn').prop('disabled', false);
                        $('#subBtn').html('Generate Query');
                        $('#scriptData').show();
                        $('#scriptData').html(response);
                    },
                    error: function (error) {
                        $('#subBtn').prop('disabled', false);
                        $('#subBtn').html('Generate Query');
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>
@endsection