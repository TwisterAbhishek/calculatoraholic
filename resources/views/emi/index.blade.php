@extends('template')

@section('head')
    <title>EMI Calculator for Home Loan, Car Loan & Personal Loan in India | {{env('APP_NAME')}}</title>
@endsection

@section('body')

<div class="container mt-5">

    <div class="row m-0">

        <div class="col-md-12">
            <h1 class="mb-4">EMI Calculator for Home Loan, Car Loan & Personal Loan in India</h1>
        </div>

        <div class="col-md-8 mb-3">
            <form id="emiForm" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="loanAmount">Loan Amount:</label>
                    <input type="number" class="form-control form-control-lg" id="loanAmount" name="loanAmount"  value="200000">
                </div>
                <div class="form-group mb-3">
                    <label for="interestRate">Interest Rate (%):</label>
                    <input type="number" step="0.01" class="form-control form-control-lg" id="interestRate" name="interestRate"  value="8">
                </div>
                <div class="form-group mb-4">
                    <label for="loanTenure">Loan Tenure (months):</label>
                    <input type="number" class="form-control form-control-lg" id="loanTenure" name="loanTenure"  value="12">
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg" id="subBtn">Calculate EMI</button>
            </form>
            <div class="row m-0 mt-4">
                <div class="col-md-4 p-4 border">
                    <span>Loan EMI</span>
                    <div style="font-size: 1.7rem;" id="emi">00.00</div>
                </div>
                <div class="col-md-4 p-4 border">
                    <span>Total Amount</span>
                    <div style="font-size: 1.7rem;" id="totalPayment">00.00</div>
                </div>
                <div class="col-md-4 p-4 border">
                    <span>Total Interest</span>
                    <div style="font-size: 1.7rem;" id="totalInterest">00.00</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3 py-5">
            <canvas id="emiPieChart" style="height: 400px; width: 200px;">Data will display here...</canvas>
        </div>

        {{-- Content  --}}
        <div class="col-md-12 mb-4">
            <h2>What is EMI?</h2>
            <p>
                Equated Monthly Installment (EMI) represents the fixed amount paid monthly to a bank or financial institution until the total loan amount is repaid. This payment encompasses both the interest on the loan and a portion of the principal amount.
            </p>

            <h2>EMI Calculation Formula</h2>
            <p>
                The EMI is calculated using the formula:
            </p>
            <pre>E = P × r × [(1 + r)^n / ((1 + r)^n - 1)]</pre>
            <p>
                Where:
            </p>
            <ul>
                <li>E is the EMI</li>
                <li>P is the Principal Loan Amount</li>
                <li>r is the rate of interest calculated on a monthly basis</li>
                <li>n is the loan tenure in months</li>
            </ul>
            <!-- Example calculation explanation -->

            <h2>Using an EMI Calculator</h2>
            <p>
                To simplify calculations for different loan amounts, interest rates, and durations, an EMI calculator is used. This tool provides quick results and visual representations of the payment schedule and payment breakdown.
            </p>
            <!-- Instructions on how to use EMI Calculator -->

            <h2>Floating Rate EMI Calculation</h2>
            <p>
                For loans with fluctuating interest rates (floating rates), it's advisable to calculate EMI considering both optimistic (rate decrease) and pessimistic (rate increase) scenarios. This helps in assessing affordability, deciding loan tenure, and understanding potential future payments under varying interest rates.
            </p>
        </div>
        {{-- End Content  --}}

    </div>

</div>

@endsection

@section('foot')
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function () {
            $('#emiForm').submit(function (event) {
                $('#subBtn').prop('disabled', true);
                $('#subBtn').html('Please wait...');
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '{{ route("emicalculate") }}',
                    data: $(this).serialize(),
                    success: function (response) {
                        $('#subBtn').prop('disabled', false);
                        $('#subBtn').html('Calculate EMI');
                        updatePieChart(response);
                        $('#emi').html('₹'+response.emi);
                        $('#totalPayment').html('₹'+response.totalPayment);
                        $('#totalInterest').html('₹'+response.totalInterest);
                    },
                    error: function (error) {
                        $('#subBtn').prop('disabled', false);
                        $('#subBtn').html('Calculate EMI');
                        console.error('Error:', error);
                    }
                });
            });
        });

        function updatePieChart(response) {
            var emiValue = parseFloat(response.emi);
            var totalPaymentValue = parseFloat(response.totalPayment);
            var totalInterestValue = parseFloat(response.totalInterest);

            var data = [emiValue, totalInterestValue, totalPaymentValue];
            var labels = ['EMI', 'Total Interest', 'Total Payment'];
            var colors = ['#36a2eb', '#ff6384', '#4bc0c0'];

            var pieData = {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: colors
                }]
            };

            var pieCtx = document.getElementById('emiPieChart').getContext('2d');

            if(window.pieChart != undefined) {
                window.pieChart.destroy();
            }

            window.pieChart = new Chart(pieCtx, {
                type: 'pie',
                data: pieData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        }
    </script>
@endsection