<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EMICalculatorController extends Controller
{
    public function index()
    {
        return view('emi.index');
    }

    public function calculate(Request $request)
    {
        $loanAmount = $request->input('loanAmount');
        $interestRate = $request->input('interestRate') / 100 / 12; // Monthly interest rate
        $loanTenure = $request->input('loanTenure');

        $emi = ($loanAmount * $interestRate * pow(1 + $interestRate, $loanTenure)) / (pow(1 + $interestRate, $loanTenure) - 1);

        $totalPayment = $emi * $loanTenure;
        $totalInterest = $totalPayment - $loanAmount;

        $emiFormatted = number_format($emi, 2, '.', '');
        $totalPaymentFormatted = number_format($totalPayment, 2, '.', '');
        $totalInterestFormatted = number_format($totalInterest, 2, '.', '');

        return response()->json([
            'emi' => $emiFormatted,
            'totalPayment' => $totalPaymentFormatted,
            'totalInterest' => $totalInterestFormatted
        ]);
    }
}
