<?php

namespace App\Http\Controllers;
use DB;
use App\model\monthlyPayment;
use App\model\sponsor;
use Illuminate\Http\Request;


class MonthlyPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $payments=DB::table('monthly_payments')->select('sponsor_id', DB::raw(
        'coalesce(count(case when payment_month = "January" then transaction_id end), 0) as J,
        coalesce(count(case when payment_month = "February" then transaction_id end), 0) as F,
        coalesce(count(case when payment_month = "March" then transaction_id end), 0) as M,
        coalesce(count(case when payment_month = "April" then transaction_id end), 0) as A,
        coalesce(count(case when payment_month = "May" then transaction_id end), 0) as Ma,
        coalesce(count(case when payment_month = "june" then transaction_id end), 0) as Ju,
        coalesce(count(case when payment_month = "July" then transaction_id end), 0) as Jl,
        coalesce(count(case when payment_month = "August" then transaction_id end), 0) as Au,
        coalesce(count(case when payment_month = "September" then transaction_id end), 0) as S,
        coalesce(count(case when payment_month = "October" then transaction_id end), 0) as O,
        coalesce(count(case when payment_month = "November" then transaction_id end), 0) as N,
        coalesce(count(case when payment_month = "December" then transaction_id end), 0) as D

        '))->groupBy('sponsor_id')->get();

        return view('backend.pages.report.monthlypay', ['payments' => $payments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\monthlyPayment  $monthlyPayment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sponsors=sponsor::where('id', $id)->first();

        return view('backend.pages.report.individualPay')->with('sponsors', $sponsors);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\monthlyPayment  $monthlyPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(monthlyPayment $monthlyPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\monthlyPayment  $monthlyPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, monthlyPayment $monthlyPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\monthlyPayment  $monthlyPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(monthlyPayment $monthlyPayment)
    {
        //
    }
}
