@extends('tools.pageView')

@section('head')
    <title>BMI Calculator | {{env('APP_NAME')}}</title>
@endsection

@section('innersection')

<div class="row m-0">

    <div class="col-md-12">
        <h1 class="mb-4">BMI Calculator</h1>
        <p>Easily calculate your BMI with our simple and clean tool.</p>
    </div>

    <div class="col-md-6">
        <label for="weight">Weight (kg):</label>
        <input type="text" id="weight" name="weight" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="height">Height (cm):</label>
        <input type="text" id="height" name="height" class="form-control">
    </div>
    <div class="col-md-12 mt-3">
        <button id="calculate" class="btn btn-primary">Calculate BMI</button>
    </div>
</div>

<div class="p-3">
    <div id="bmi" class="alert alert-primary" style="display: none;"></div>
    <div id="category" class="alert alert-success" style="display: none;"></div>
</div>


@endsection

@section('foot')
<script>
    $(document).ready(function(){
        $("#calculate").click(function(){
            $('#bmi, #category').show();
            var weight = parseFloat($("#weight").val());
            var height = parseFloat($("#height").val());

            if (!isNaN(weight) && !isNaN(height) && height > 0 && weight > 0) {
                var bmi = weight / ((height / 100) * (height / 100));
                $("#bmi").html("Your BMI is: <b>" + bmi.toFixed(2) + "</b>");
                // Categorize BMI
                var category;
                    if (bmi < 18.5) {
                        category = '<span class="text-danger">Underweight</span>';
                    } else if (bmi >= 18.5 && bmi < 25) {
                        category = '<span class="text-success">Normal weight</span>';
                    } else if (bmi >= 25 && bmi < 30) {
                        category = '<span class="text-danger">Overweight</span>';
                    } else {
                        category = '<span class="text-danger">Obese</span>';
                    }
                    $("#category").html("Category: " + category);
            } else {
                $("#bmi").text("Please enter valid weight and height.");
            }
        });
    });
</script>
@endsection